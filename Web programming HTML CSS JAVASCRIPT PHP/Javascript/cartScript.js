
function del(target)
{
    var buttonDel=target.parentNode;
    var rowDel=buttonDel.parentNode

    var headerDel=rowDel.previousElementSibling;
    headerDel.parentNode.removeChild(headerDel);

    rowDel.parentNode.removeChild(rowDel);
    subTotal();
}

function del1(target)
{
    var buttonDel=target.parentNode;
    var rowDel=buttonDel.parentNode
    rowDel.parentNode.removeChild(rowDel);
}

function del2(target)
{
    var buttonDel=target.parentNode.parentNode;
    var rowDel=buttonDel.parentNode
    rowDel.parentNode.removeChild(rowDel);
}

function del3(target)
{
    var buttonDel=target.parentNode.parentNode;
    var rowDel=buttonDel.parentNode
    var headerDel=rowDel.previousElementSibling;
    headerDel.parentNode.removeChild(headerDel);

    rowDel.parentNode.removeChild(rowDel);
}

function fcn1(target)
{
    
    var newTarg=target.previousElementSibling.value;

    if(verifyItem(newTarg).isValidName){
        var node0=document.getElementById("ed");
        var node1=document.createElement("tr");
        node0.appendChild(node1);

        var node2= document.createElement("td");
        node1.appendChild(node2);

        var node3= document.createElement("img")
        var location= verifyItem(newTarg).imgSrc;

        node3.src=location;
        node3.style.padding="0px"
        node3.style.paddingLeft="10px";
        node3.style.height="auto";
        node3.style.width="auto";
        node3.style.maxHeight="150px"
        node3.style.maxWidth="150px";
        node3.style.marginBottom="25px";
        node3.style.marginTop="25px";
        node2.appendChild(node3);

        var node4= document.createElement("td");
        node4.style.verticalAlign="middle";
        node4.style.color="#334754";
        node4.style.fontSize="20px";
        node4.textContent=verifyItem(newTarg).name;
        node1.appendChild(node4);


        var node5=document.createElement("td");
        node5.style.verticalAlign="middle";
        node5.style.color="#334754";
        node5.style.fontSize="20px";
        node5.textContent=1;                    //Quantity function
        node1.appendChild(node5);

        var node6=document.createElement("td");
        node6.style.verticalAlign="middle";
        node6.style.color="#334754";
        node6.style.fontSize="20px";
        node6.textContent=verifyItem(newTarg).price;              //Price Function
        node1.appendChild(node6);

        var node7=document.createElement("td");
        node7.style.verticalAlign="middle";
        node7.style.fontSize="17px";   
        node1.appendChild(node7);

        var node0=document.createElement("div");          //For keeping the style
        node7.appendChild(node0);

        var node8= document.createElement("button");
        node0.appendChild(node8);
        node8.type="button";
        node8.innerHTML='<i class="far fa-times-circle"></i>';
        node8.onclick=function(){del2(node8)};

        var node9=document.createElement("td");
        node9.style.verticalAlign="middle";
        node9.style.fontSize="17px";
        node1.appendChild(node9);

        var node10= document.createElement("a");
        node10.href="www.google.ca";
        node10.className="editButton";
        node9.appendChild(node10);

        var node11= document.createElement("button");
        node11.type="button";
        node11.textContent="EDIT";
        node10.appendChild(node11);

        target.previousElementSibling.value="";

    }

    else{
        alert("Incorrent Name was Entered, Please Try Again!");
    }

}


function verifyItem(target)
{
    //Dairy Section
    var obj= new Object();
    obj.isValidName=false;
    obj.name=null;
    obj.imgSrc=null;
    obj.price="$0";

    if(target.toUpperCase()===("SHREDDED MOZZARELLA CHEESE BAG") || target.toUpperCase()==="SHREDDED MOZZARELLA" || target.toUpperCase()==="SHREDDED MOZZARELLA CHEESE")
    {
        obj.isValidName= true;
        obj.imgSrc="Images/shreddedcheese.png";
        obj.name="Shredded Mozzarella Cheese Bag"
        obj.price="$5.99";
        return obj;
    }

    else if(target.toUpperCase()===("Bagel").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/bagel.jpg";
        obj.name="Bagel";
        obj.price="$4";
        return obj;
    }

    else if(target.toUpperCase()===("Strawberries").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/strawberry.jpg";
        obj.name="Strawberries";
        obj.price="$3";
        return obj;
    }

    else if(target.toUpperCase()===("Milk").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/milk.jpg";
        obj.name="Milk";
        obj.price="$6.56";
        return obj;
    }

    else if(target.toUpperCase()===("CHEDDAR CHEESE"))
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/cheddarcheese.png";
        obj.name="Cheddar Cheese";
        obj.price="$4.49";
        return obj;
    }

    else if(target.toUpperCase()===("Strawberry Yogurt Pack").toUpperCase()|| target.toUpperCase()===("Strawberry Yogurt").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/straberryyogurt.png";
        obj.name="Strawberry Yogurt Pack";
        obj.price="$7.49";
        return obj;
    }

    else if(target.toUpperCase()===("Blueberry Yogurt Pack").toUpperCase()|| target.toUpperCase()===("Blueberry Yogurt").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/yogurtcup.png";
        obj.name="Blueberry Yogurt Pack";
        obj.price="$7.49";
        return obj;
    }

    else if(target.toUpperCase()===("Mixed Fruit Flavored Yogurt Pack").toUpperCase()|| target.toUpperCase()===("Mixed Fruit Flavored Yogurt").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/yogurtpack.png";
        obj.name="Mixed Fruit Flavored Yogurt Pack";
        obj.price="$5.99";
        return obj;
    }

    else if(target.toUpperCase()===("Large Eggs").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/30eggs.png";
        obj.name="Large Eggs";
        obj.price="$7.49";
        return obj;
    }

    else if(target.toUpperCase()===("Large White Eggs").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/10whiteeggs.png";
        obj.name="Large White Eggs";
        obj.price="$2.99";
        return obj;
    }

    else if(target.toUpperCase()===("Large Brown Eggs").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/12browneggs.png";
        obj.name="Large Brown Eggs";
        obj.price="$4.69";
        return obj;
    }

    else if(target.toUpperCase()===("1% Milk Large").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/1milk4L.png";
        obj.name="1% Milk";
        obj.price="$6.38";
        return obj;
    }

    else if(target.toUpperCase()===("1% Milk small").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/1milk1L.png";
        obj.name= "1% Milk";
        obj.price="$1.85";
        return obj;
    }

    else if(target.toUpperCase()===("2% Milk Large").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/2milk4L.png";
        obj.name="2% Milk";
        obj.price="$6.68";
        return obj;
    }

    else if(target.toUpperCase()===("2% Milk small").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/2milk1L.png";
        obj.name="2% Milk";
        obj.price="$1.93";
        return obj;
    }

    else if(target.toUpperCase()===("Salted Butter").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/butter.png";
        obj.name="Salted Butter";
        obj.price="$4.69";
        return obj;
    }

    else if(target.toUpperCase()===("Unsalted Butter").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/unsaltedbutter.png";
        obj.name= "Unsalted Butter";
        obj.price="$4.89";
        return obj;
    }

    else if(target.toUpperCase()===("Honeycrips Apple").toUpperCase() || target.toUpperCase()===("Apple").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/apple1.png";
        obj.name= "Honeycrips Apple";
        obj.price="$1.41";
        return obj;
    }

    else if(target.toUpperCase()===("Banana").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/banana.png";
        obj.name= "Banana";
        obj.price="$0.33";
        return obj;
    }

    else if(target.toUpperCase()===("Large Navel Orange").toUpperCase() || target.toUpperCase()===("Orange").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/orange.png";
        obj.name="Large Navel Orange";
        obj.price="$1.49";
        return obj;
    }

    else if(target.toUpperCase()===("Bartlett Pear").toUpperCase() || target.toUpperCase()===("Pear").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/pear.png";
        obj.name= "Bartlett Pear";
        obj.price="$0.88";
        return obj;
    }

    else if(target.toUpperCase()===("Celery").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc= "Images/celery.png";
        obj.name= "Celery";
        obj.price="$3.69";
        return obj;
    }

    else if(target.toUpperCase()===("English HH Seedless Cucumber").toUpperCase() || target.toUpperCase()===("Cucumber").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/cucumber.png";
        obj.name= "English HH Seedless Cucumber";
        obj.price="$2.50";
        return obj;
    }

    else if(target.toUpperCase()===("Romaine Lettuce").toUpperCase() || target.toUpperCase()===("Lettuce").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/lettuce.png";
        obj.name= "Romaine Lettuce";
        obj.price="$2.99";
        return obj;
    }

    else if(target.toUpperCase()===("Red Pepper").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/redpepper.png";
        obj.name="Red Pepper";
        obj.price="$3.96";
        return obj;
    }

    //--------------------------------------------------------

    else if(target.toUpperCase()===("Plain Bagels").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/plainbagel.png";
        obj.name="Plain Bagels";
        obj.price="$3.99";
        return obj;
    }

    else if(target.toUpperCase()===("Whole Wheat Bagels").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/wholewheatbagel.png";
        obj.name="Whole Wheat Bagels";
        obj.price="$5.89";
        return obj;
    }

    else if(target.toUpperCase()===("Sliced White Bread").toUpperCase() || target.toUpperCase()===("White Bread").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/whitebread.png";
        obj.name= "Sliced White Bread";
        obj.price="$3.58";
        return obj;
    }

    else if(target.toUpperCase()===("Sliced Whole Wheat Bread").toUpperCase() || target.toUpperCase()===("Whole Wheat Bread").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/wholewheatbread.png";
        obj.name="Sliced Whole Wheat Bread";
        obj.price="$4.19";
        return obj;
    }

    else if(target.toUpperCase()===("French Baguette").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/Breadrolls.png";
        obj.name= "French Baguette";
        obj.price="$3.19";
        return obj;
    }

    else if(target.toUpperCase()===("Maple Pastry Bites").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/mapplepastry.png";
        obj.name="Maple Pastry Bites";
        obj.price="$4.99";
        return obj;
    }

    else if(target.toUpperCase()===("Palm Leaf Pastries").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/leafpastry.png";
        obj.name= "Palm Leaf Pastries";
        obj.price="$6.99";
        return obj;
    }

    //--------------------------------------------------------------------------------------

    else if(target.toUpperCase()===("Lean Ground Beef").toUpperCase() || target.toUpperCase()===("Ground Beef").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/groundbeef.png";
        obj.name= "Lean Ground Beef";
        obj.price="$7.73";
        return obj;
    }

    else if(target.toUpperCase()===("Rib Steak").toUpperCase() || target.toUpperCase()===("Steak").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/steak.png";
        obj.name= "Rib Steak";
        obj.price="$10.58";
        return obj;
    }

    else if(target.toUpperCase()===("Butterfly Pork Chops, 3 Pack").toUpperCase() || target.toUpperCase()===("Butterfly Pork Chops").toUpperCase()|| target.toUpperCase()===("Pork Chops").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/pork.png";
        obj.name= "Butterfly Pork Chops, 3 Pack";
        obj.price="$8.59";
        return obj;
    }

    else if(target.toUpperCase()===("Boneless Chicken Breast, 3 Pack").toUpperCase() || target.toUpperCase()===("Boneless Chicken Breast").toUpperCase()|| target.toUpperCase()===("Chicken Breast").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/chickenbreast.png";
        obj.name= "Boneless Chicken Breast, 3 Pack";
        obj.price="$10.21";
        return obj;
    }

    else if(target.toUpperCase()===("Lean Minced Turkey").toUpperCase() || target.toUpperCase()===("Minced Turkey").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/mincedturkey.png";
        obj.name= "Lean Minced Turkey";
        obj.price="$5.99";
        return obj;
    }

    else if(target.toUpperCase()===("Confit Duck Legs, 2 pack").toUpperCase() || target.toUpperCase()===("Confit Duck Legs").toUpperCase()|| target.toUpperCase()===("Duck Legs").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/duckconfit.png";
        obj.name= "Confit Duck Legs, 2 pack";
        obj.price="$16.99";
        return obj;
    }

    else if(target.toUpperCase()===("Salmon Fillet").toUpperCase() || target.toUpperCase()===("Salmon").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/salmonfillet.png";
        obj.name= "Salmon Fillet";
        obj.price="$6.83";
        return obj;
    }

    else if(target.toUpperCase()===("Haddock Fillet").toUpperCase() || target.toUpperCase()===("Haddock").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/haddockfillet.png";
        obj.name= "Haddock Fillet";
        obj.price="$3.52";
        return obj;
    }

    else if(target.toUpperCase()===("Live Lobster").toUpperCase() || target.toUpperCase()===("Lobster").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/lobster.png";
        obj.name= "Live Lobster";
        obj.price="$19.10";
        return obj;
    }

    //------------------------------------------------------------------------------------------

    else if(target.toUpperCase()===("All Purpose Flour").toUpperCase() || target.toUpperCase()===("Flour").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/flour.png";
        obj.name= "All Purpose Flour";
        obj.price="$8.29";
        return obj;
    }

    else if(target.toUpperCase()===("Sugar").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/sugar.png";
        obj.name= "Sugar";
        obj.price="$4.49";
        return obj;
    }

    else if(target.toUpperCase()===("Table Salt").toUpperCase() || target.toUpperCase()===("Salt").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/salt.png";
        obj.name= "Table Salt";
        obj.price="$1.79";
        return obj;
    }

    else if(target.toUpperCase()===("Chocolate Chips").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/chocolatechip.png";
        obj.name= "Chocolate Chips";
        obj.price="$16.99";
        return obj;
    }


    else if(target.toUpperCase()===("Canned Peas").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/cannedpeas.png";
        obj.name= "Canned Peas";
        obj.price="$1.69";
        return obj;
    }

    else if(target.toUpperCase()===("Canned Tuna Chunks").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/cannedtuna.png";
        obj.name= "Canned Tuna Chunks";
        obj.price="$1.49";
        return obj;
    }

    else if(target.toUpperCase()===("Diced Tomatoes").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/dicedtomatoes.png";
        obj.name= "Diced Tomatoes";
        obj.price="$0.99";
        return obj;
    }

    else if(target.toUpperCase()===("Tomato Soup").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/cannedsoup.png";
        obj.name= "Tomato Soup";
        obj.price="$3.99";
        return obj;
    }

    else if(target.toUpperCase()===("Cream of Mushroom Soup").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/creamofmushroom.png";
        obj.name= "Cream of Mushroom Soup";
        obj.price="$3.29";
        return obj;
    }

    else if(target.toUpperCase()===("Pea and Ham Soup").toUpperCase())
    {
        obj.isValidName= true;
        obj.imgSrc="Images/peaandhamsoup.png";
        obj.name= "Pea and Ham Soup";
        obj.price="$1.99";
        return obj;
    }

    else{
        obj.isValidName=false;
        obj.imgSrc=null;
        obj.name=null;
        obj.price="$0"
        return obj
    }

}

function proceedToPay()
{
    alert("Preparing Your Items For Checkout!");
}

function getInitalPrice(target)
{
    var itemName=target.parentNode.parentNode.previousElementSibling.innerHTML;
    var initialPrice=0;

    initialPrice=((verifyItem(itemName).price).substring(1))*1;
    return initialPrice;
}

function updatePrice(targ,pr,qty)
{

    var price=Math.round((pr*qty)*100)/100;
    var priceStr="$"+price
    targ.parentNode.parentNode.nextElementSibling.innerHTML=priceStr;

}

function subTotal()
{
    subtotal=0;
    var ta = document.getElementById("myTableCart");

    for(var i=1; i<ta.rows.length;i++)
    {  
        var row=ta.rows[i];
        for(var j=3; j<4; j++)
        {
            var col= row.cells[j];
            subtotal+=col.innerHTML.substring(1)*1;
            
        }
        i++;
    }

    displaySubtotal(Math.round(subtotal*100)/100);
  
}

function displaySubtotal(amount)
{
    var ta = document.getElementById("mySubtotalCart");
   
    var gst=(Math.round((amount *0.05)*100)/100);
    var qst=(Math.round((amount *0.09975)*100)/100);
    var total=(Math.round((amount+qst+gst)*100)/100)

    ta.rows[0].cells[1].innerHTML="$"+amount;

    ta.rows[1].cells[1].innerHTML="$"+gst;

    ta.rows[2].cells[1].innerHTML="$"+qst;

    ta.rows[3].cells[1].innerHTML="$"+total;
 
}

function updateQ(target,add)
{
    var quantity=0;
    var price=0;
    
    if (add===true)
    {
        quantity=++target.nextElementSibling.value;
        price=getInitalPrice(target);
        updatePrice(target,price,quantity);
    }

    else 
    {
        if(target.previousElementSibling.value >0)
        {
            quantity=--target.previousElementSibling.value;
            price=getInitalPrice(target);
            updatePrice(target,price,quantity);
         }

        if(target.previousElementSibling.value==0)
        {
            del3(target);
            price=0;
            updatePrice(target,price,quantity);
        }
    }

    subTotal();
}

function emptyCart() {
    var cartList =document.getElementById('myTableCart');
    cartList.innerHTML = '';
    subTotal();
}
