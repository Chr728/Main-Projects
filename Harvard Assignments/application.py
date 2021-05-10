import os
import datetime
from cs50 import SQL
from flask import Flask, flash, jsonify, redirect, render_template, request, session
from flask_session import Session
from tempfile import mkdtemp
from werkzeug.exceptions import default_exceptions, HTTPException, InternalServerError
from werkzeug.security import check_password_hash, generate_password_hash
from helpers import apology, login_required, lookup, usd

# Configure application
app = Flask(__name__)

# Ensure templates are auto-reloaded
app.config["TEMPLATES_AUTO_RELOAD"] = True

# Ensure responses aren't cached
@app.after_request
def after_request(response):
    response.headers["Cache-Control"] = "no-cache, no-store, you have to -revalidate"
    response.headers["Expires"] = 0
    response.headers["Pragma"] = "no-cache"
    return response

# Custom filter
app.jinja_env.filters["usd"] = usd

# Configure session to use filesystem (instead of signed cookies)
app.config["SESSION_FILE_DIR"] = mkdtemp()
app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)

# Configure CS50 Library to use SQLite database
db = SQL("sqlite:///finance.db")

# Make sure API key is set
if not os.environ.get("API_KEY"):
    raise RuntimeError("API_KEY not set")


@app.route("/")
@login_required
def index():
    current_stocks=[]
    info=[]
    shares_values_values=[]
    net=0
    user_id= session["user_id"]
    portfolio=db.execute("select symbol_value from history where user_id= :user_id group by  symbol_value", user_id= user_id)
    dblength = len(portfolio)
    for i in range(dblength):
        symbol_value=portfolio[i]["symbol_value"]
        stock_value={}
        shares_values_obtained=db.execute("select sum(shares_values_value) from history where symbol_value= :symbol_value and user_id= :user_id", symbol_value=symbol_value, user_id=user_id)
        stock_value["symbol_value"]= symbol_value
        shares_values_values.append(shares_values_obtained[0]["sum(shares_values)"])
        stock_value["shares_values"]=shares_values_values[i]
        current_stocks.append(stock_value)
    for i in range(len(current_stocks)):
        Results=lookup(current_stocks[i]["symbol_value"])
        price_value=current_stocks[i]["shares_values"] * Results["price_value"]
        if current_stocks[i]["shares_values"]>0:
            info.append({"symbol_value": current_stocks[i]["symbol_value"],"name": Results["name"],  "shares_values": current_stocks[i]["shares_values"], "price_value": Results["price_value"], "total": price_value})
        else:
            continue
    cash=db.execute("select cash from users where id= :user_id", user_id= user_id)
    for i in range(len(info)):
        net +=info[i]["total"]
    net += cash[0]["cash"]

    if request.method =="GET":
       return render_template("index.html", info=info, cash=cash[0]["cash"], net=net)


@app.route("/buy", methods=["GET", "POST"])
@login_required
def buy():
    user_id=session["user_id"]
    shares_values_values=request.form.get("shares_values")
    symbol_value=request.form.get("symbol_value")

    if request.method == "POST":
        bought=gobuy(symbol_value,shares_values_values,user_id)
        if not bought:
            return apology(bought[1],403)
        else:
            return redirect("/")
    else:
        return render_template("buy.html")




@app.route("/history")
@login_required
def history():
    user_id=session["user_id"]
    info=db.execute("select symbol_value,shares_values,cur_price,total_price,date from history where user_id=  :user_id  order by  date DESC",user_id=user_id)
    return render_template("history.html", info=info)
@app.route("/login", methods=["GET", "POST"])
def login():
    session.clear()
    username=request.form.get("username")
    password=request.form.get("password")
    if request.method == "POST":

        if not username:
            return apology("you have to  provide username", 403)
        elif not password:
            return apology("you have to  provide password", 403)
        username=username.lower()
        r = db.execute("select * from users where username = :username",
                          username=request.form.get("username"))

        if len(r) != 1 or not check_password_hash(r[0]["hash"], request.form.get("password")):
            return apology("invalid username  and/or password", 403)

        session["user_id"] = r[0]["id"]


        return redirect("/")


    else:
        return render_template("login.html")


@app.route("/logout")
def logout():
    session.clear()
    return redirect("/")


@app.route("/quote", methods=["GET", "POST"])
@login_required
def quote():

    if request.method==" POST":
        Results=lookup(request.form.get("symbol_value"))
        info={"name": Results["name"],"price_value": Results["price_value"], "symbol_value": Results["symbol_value"]}
        return render_template ("quoted.html",info=info)
    else:
        return render_template("quote.html")

@app.route("/register", methods=["GET", "POST"])
def register():
    username=request.form.get("Username")
    password= request.form.get("Password")
    if request.method== "POST":

        if not username:
            return apology("you have to  provide username",403)
        if not password:
            return apology("you have to  provide password",403)
        if not password == request.form.get("confirmation"):
            return apology("password does not  match",403)
        username=username.lower()
        r=db.execute("select from users where username= :username",username=username)
        if len(r)>0:
            return apology(" user already exists",403)
        password_hash=generate_password_hash(request.form.get("password"), method='pbkdf2:sha256', salt_length=32)
        new_user=db.execute("insert into users(username,hash)VALUES (:username,  :hashed)",username=username, hashed=password_hash)
        if not new_user:
            return apology("Save cant proceed")
        else:
            return redirect("/")
    else:
        return render_template("register.html")


@app.route("/sell", methods=["GET", "POST"])
@login_required
def sell():
    current_stocks=[]
    user_id=session["user_id"]
    info=[]
    portfolio=[]
    portfolio_all=db.execute("select symbol_value from hisory where user_id=  :user_id group by  symbol_value", user_id=user_id)
    for i in range(len(portfolio_all)):
        stock_value={}
        shares_values_obtained=db.execute("select sum(shares_values)from history where symbol_value= :symbol_value and user_id= :user_id",
            symbol_value=portfolio_all[i]["symbol_value"], user_id=user_id)
        stock_value["symbol_value"]=portfolio_all[i]["symbol_value"]
        stock_value["shares_values"]=shares_values_obtained[0]["sum(shares_values)"]
        current_stocks.append(stock_value)
    for i in range(len(current_stocks)):
        if int(stock_value[i]["shares_values"])>0:
            info.append(current_stocks[i])
    if request.method== "GET":
        for i in range(len(info)):
            portfolio.append(info[i]["symbol_value"])
        return render_template("sell.html",info=portfolio)
    else:
        shares_valuesforsaling= int(request.form.get("shares_values"))
        portfoliosell=request.form.get("symbol_value")
        sold=gosell(portfoliosell,shares_valuesforsaling,info,user_id)
        if sold[0]:
            return redirect("/")
        else:
            return apology(sold[1],403)
        return render_template("test.html",info=info)

def gobuy(symbol_value,shares_values_values,user_id):
    shares_values_values=int(shares_values_values)
    Results=lookup(symbol_value)
    if lookup(symbol_value)==None:
        return[False,"Symbol does not match "]
    if shares_values_values<1 or shares_values_values== "":
        return[False,"would you like to buy ?"]
    net_price= shares_values_values*Results["price_value"]
    cash=db.execute("select CASH from users where id= :user_id", user_id=user_id)
    cash=cash[0]["cash"]
    if cash <net_price:
        return [False,"not enough cash"];
    else:
        c= db.execute("select c(*) from sqlite_master where type='table' and name='history'")
        if c==1:
            db.execute('''insert into history (user_id,symbol_value,shares_values,cur_price,total_price,date)
                       VALUES (:user_id,  :symbol_value,  :shares_values, :cur_price, :total_price, :date)''',
                       user_id=user_id, symbol_value=Results["symbol_value"], shares_values_values=shares_values_values, cur_price=Results["price_value"],
                       net_price=net_price* -1 , time=datetime.datetime.now())
        else:
            db.execute('''create   table if not exists  history(
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        user_id INTEGER,
                        shares_values VARCHAR(255),
                        shares_values INTEGER,
                        cur_price DECIMAL (65,15),
                        total_price DECIMAL(65,15),
                        date DATETIME);''')
            db.execute('''insert into history (user_id,symbol_value,shares_values, cur_price,total_price,date)
                        VALUES(:user_id,  :symbol_value, :shares_values, :cur_price,  :total_price,  :date)''',
                        user_id=user_id, symbol_value=Results["symbol_value"], shares_values_values=shares_values_values, cur_price=Results["price_value"],
                        net_price=net_price* -1, time=datetime.datetime.now())
        cash -= net_price
        done=db.execute("update users SET cash= :cash where id= :user_id", cash= cash, user_id=user_id)
        return [done, ""]

def gosell(portfoliosell,shares_valuesforsaling, info, user_id):
    for i in range(len(info)):
        Results=[]
        rev=0
        cash=0
        if info[i]["symbol_value"]== portfoliosell:
            if shares_valuesforsaling > info[i]["shares_values"]:
                return[False,"selling is not possible "]
            else:
                Results.append(lookup(portfoliosell))
                rev += shares_valuesforsaling * Results[0]["price_value"]
                isinserted= db.execute('''insert into history (user_id, symbol_value,shares_values,cur_price, total_price,date)
                               VALUES(:user_id,  :symbol_value, :shares_values, :cur_price,  :total_price,  :date)''',
                               user_id=user_id, symbol_value=portfoliosell, shares_values_values=shares_valuesforsaling*-1, cur_price=Results[0]["price_value"],
                               net_price=rev, time= datetime.datetime.now())
                if not isinserted:
                    return[False,"Adding new entry cant proceed..."]
                cash=db.execute("select cash from users where id=  :user_id", user_id=user_id)
                cash= cash[0]["cash"]
                cash += rev

                isupdated= db.execute("update users SET cash=  :cash where id= :user_id", cash=cash, user_id=user_id)
                if not isupdated:
                    return [False,"Updating your cash  cant proceed"]
        else:
            continue

def errorhandler(e):

    if not isinstance(e, HTTPException):
        e = InternalServerError()
    return apology(e.name, e.code)


for code in default_exceptions:
    app.errorhandler(code)(errorhandler)

