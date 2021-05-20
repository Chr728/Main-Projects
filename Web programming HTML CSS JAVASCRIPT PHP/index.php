<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="Images/logo.png">
    <!--it has the top of the page-->     

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/cartStyle.css">
  
    
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="php/index.html"><img src="Images/logo.png" class="img-fluid"
                    alt="Responsive image"><span id="title">Mom's Favourite Market</span>
            </a>
            <!--LINK TO MAIN PAGE-->
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="php/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aisles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="php/Dairy&Eggs_Relevance.php">Dairy & Eggs</a></li>
                            <li><a class="dropdown-item" href="php/F&V_Relevance.php">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="php/Bakery_Relevance.php">Bakery</a></li>
                            <li><a class="dropdown-item" href="php/Butchery_Relevance.php">Butchery</a></li>
                            <li><a class="dropdown-item" href="php/Pantry_Relevance.php">Non-Perishable Food</a></li>
                            <li><a class="dropdown-item" href="php/Frozen_Relevance.php">Frozen Food</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="php/WeeklyDeals.php" class="nav-link">Weekly Deals!</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/environment1.php" class="nav-link">Environment</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/careers.php" class="nav-link">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/About us.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/loginpage.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>
        
                    <li class="nav-item">
                        <a href="php/Cart.php" class="nav-link"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        

        <!--Alert using bootstrap built in classes-->
        <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
            -- Closing Hours May Vary Due to COVID-19 --
            <button aria-label="Close" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </header>


        <!--it inlcludes all the main parts of the main page inluding all the promotions that we have-->     

    <div id="carouselExampleControls" class="carousel slide  " data-bs-ride="carousel" style=margin-top:-1%;>
        <div class="carousel-inner  ">
            <div class="carousel-item active">
                <div class="d-block w-100px"
                    style="height:450px; margin-left: auto; margin-right: auto; background-color: #334754; color:  white; text-align: center;">
                    <h2 style="background-color: #6DAFFE; font-family:roboto-bold,Arial,Helvetica,Sans-serif ;">Current
                        Promotions<br></h2>
                    <h4 style="font-family:roboto-bold,Arial,Helvetica,Sans-serif;"> Need some ingredients to try your
                        dream cake recipe ? </h4>
                    <h4 style="font-family:roboto-bold,Arial,Helvetica,Sans-serif;"> Select 3 items of our bakery
                        products and get FREE DELIVERY right at your door !!</h4>
                    <!--https://unsplash.com/photos/_B7shfNUXEA-->
                    <img alt="promo" src="Images/promo.jpg" class="promo" style="height:350px;  width:400px;">
                    <br>


                </div>
            </div>

            <div class="carousel-item ">
                <div class="d-block w-600px"
                    style="height:450px; margin-left: auto;margin-right: auto; background-color: #334754; color:  white;text-align: center;">
                    <h2 style="background-color: #6DAFFE;font-family:roboto-bold,Arial,Helvetica,Sans-serif;">Current
                        Promotions<br></h2>
                    <h3 style="font-family:roboto-bold,Arial,Helvetica,Sans-serif;"> 50% DISCOUNT ON OUR BUTCHERY
                        PRODUCTS</h3>
                    <h4 style="color:#e04362;font-family:roboto-bold,Arial,Helvetica,Sans-serif;">(Save up to 70 $)</h4>
                    <br>
                    <!--https://unsplash.com/photos/s-Z-h0fEiBM-->
                    <img alt="meat1" src="Images/meat1.jpg" class="meat"
                        style="height:300px;  width:400px; margin-top: auto;   ">


                </div>

            </div>


            <div class="carousel-item ">
                <div class="d-block w-800px"
                    style="height:450px; margin-left: auto;margin-right: auto; background-color: #334754; color:  white;text-align: center;">
                    <h2 style="background-color: #6DAFFE;font-family:roboto-bold,Arial,Helvetica,Sans-serif;">Current
                        Promotions<br></h2>
                    <h3 style="font-family:roboto-bold,Arial,Helvetica,Sans-serif;">Plan, shop and cook faster with our
                        online app ! </h3>
                    <h4>Create a free account at our online app and get 75 % DISCOUNT on your next purchase</h4><br>
                    <!--https://unsplash.com/photos/L2iZFRPaH1M-->
                    <img alt="app" src="Images/app.jpg" class="app"
                        style="height:300px;  width:400px; margin-top: auto;   ">


                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <br>
    <br> <br><br><br>

    <!-- COMMENT https://unsplash.com/photos/I4e1cY1I0FQ-->
    <!-- COMMENT recipes  https://www.iga.net/en/inspiring_recipes/recipes/sunny_french_toast-->
    <img src="Images/mom.jpg" class="img-fluid" alt="Mom is cooking"
        style="text-align:center; height:400px; width:450px; margin-left:20%;">

    <br>
    <h1 style="color:#e04362; font-size: 25px; margin-left:20%;">Here is our weekly recipes :</h1><br>



    <div class="table-responsive">
        <div class="main">
            <table class="table">

                <td style="color:#334754; font-size: 25px; text-align:center">SUNNY FRENCH TOAST</td>
                <th></th>
                <tr>
                     <!--it inlcludes all the main parts of the main page inluding all the recipes that we have-->

                    <th style="color:#334754; font-size: 22px;">INGREDIENTS :</th>
                    <th style="color:#334754; font-size: 22px;">DIRECTIONS :</th>

                    <th></th>
                    <th></th>
                </tr>




                <td style="vertical-align: middle; color:#334754; font-size:15px;">
                    <ul>
                        <li>3 eggs</li>
                        <li>250 mL (1 cup) milk</li>
                        <li>Hint of vanilla or cinnamon</li>
                        <li>30 mL (2 tbsp.) orange zest</li>
                        <li>Juice of 2 oranges</li>
                        <li>To taste, butter or oil</li>
                        <li>8 slices of Au Pain Doré cranberry and orange bread</li>
                        <li>750 mL (3 cups) your choice of citrus fruits peeled and sectionned</li>
                        <li>To taste, maple syrup</li>
                    </ul>
                </td>

                <td style="vertical-align:auto;  font-size:15px;">
                    <ol class="list1">
                        <li>Beat eggs and milk by hand in a bowl until smooth.</li>
                        <li>Add vanilla, orange juice and zest.</li>
                        <li>Heat a little butter or oil in a skillet over medium-high.</li>
                        <li>Dip bread slices in egg mixture until both sides are thoroughly saturated.</li>
                        <li>Cook in skillet until both sides are golden brown.</li>
                        <li>Serve with citrus sections and maple syrup.</li>
                        </dl>
                    </ol>
                </td>
                </tr>


                <tr>
                    <td style="vertical-align: middle; color:#334754; font-size:25px; text-align:center">ENOKI MUSHROOM
                        LETTUCE ROLLS WITH PEANUT SAUCE</td>

                <tr>
                    <td style="vertical-align: middle; color:#334754; font-size:15px;">
                        <ul>
                            <li>1pkg (224 g) Sensations by compliments Bison Steak Medallions</li>
                            <li>To taste, salt and pepper</li>
                            <li>12 leaves Boston lettuce</li>
                            <li>1 pkg enoki mushrooms</li>
                            <li>60 mL (1/4 cup) Sensations by compliments Peanut Satay Cooking Sauce</li>
                        </ul>
                    </td>

                    <td style="vertical-align: middle; color:#334754; font-size:15px;">
                        <ol>
                            <li>Preheat barbecue to medium-high. Season steaks with salt and pepper and grill 3 to 4
                                min. per side.</li>
                            <li>Transfer steaks to a plate, cover with foil, and let rest 5 min.</li>
                            <li>Meanwhile, place lettuce leaves on a serving plate and top each with 3 to 4 mushrooms.
                            </li>
                            <li>Slice steaks thinly into 24 strips and place 2 slices on top of each lettuce leaf.
                                Drizzle with peanut sauce and crushed peanuts if desired.</li>
                            <li>Fold lettuce over the meat to form rolls and serve immediately.</li>
                        </ol>
                    </td>
                </tr>
                </tr>
            </table>


        </div>
    </div>


    <br><br>






     <!--it includes all the main parts of the main page inluding all the  the othyer parts such as our surveys that we have-->

    <div class="card" style="width: 16rem;float:left; margin-left:25%;">
        <img src="Images/meat.jpg" class="card-img-top" alt="meat">
        <div class="card-body">
            <h5 class="card-title">Need an advice for recipes ?</h5>
            <p class="card-text">Complete our online survey and get the chance to win one of the best Chefs recipe books
            </p>
            <a href="#" class="btn btn-primary">Complete the survey</a>
        </div>
    </div>
    <div class="card" style="width: 16rem; float:left;">
        <img src="Images/food.jpg" class="card-img-top" alt="food">
        <div class="card-body"><br>
            <h5 class="card-title"> Check Our wide Variety of vegetables </h5><br>
            <p class="card-text">"Nothing will benefit human health and increase the chances for survival of life on
                Earth as much as the evolution to a vegetarian diet."
                <br> Albert Einstein
            </p><br>
            <a href="#" class="btn btn-primary">Check our Vegeterian Flyer</a><br><br><br><br>
        </div>
    </div>
    <div class="card" style="width: 16rem; margin-left:8%;">
        <img src="Images/cake.jpg" class="card-img-top" alt="cake">
        <div class="card-body">
            <h5 class="card-title">looking for more recipes ? </h5>
            <p class="card-text"> More than 100 free recipes every week !</p><br>
            <a href="#" class="btn btn-primary">Visit our recipe section</a>
        </div>
    </div>



    <br><br>





    <br><br><br>




    <!-- COMMENT https://unsplash.com/photos/XgFFJKSPkNk-->

    <!-- COMMENT   https://unsplash.com/photos/4_jhDO54BYg-->
    <!-- COMMENT https://unsplash.com/photos/_y5CCcYWTjU-->




    <!--https://montrealgazette.com/-->
    <!--https://unsplash.com/photos/K-iJz15pfww-->


    <div class="card mb-3"
        style="max-width: 900px; display: block;  text-align:center; margin-left: auto;margin-right:auto;  background-color:white  ;color: #6DAFFE">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="Images/organic.jpg" alt="mom" style=" height:195px; width:300px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Montreal Gazette 2021</h5>
                    <h6>BEST GROCERY STORES DURING COVID-19 PANDEMIC </h6>
                    <p class="card-text"><small class="text-muted" style="color: #6543e0;">Marian Scott • Montreal
                            Gazette Publishing date:Feb 16, 2021 </small></p>
                    <p class="card-text"> According to a survey completed in 2020, Mom's favourite Market is one of the
                        BEST Markets for selling organic food (TOP 5 !) </p>

                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="card" style=" margin-bottom: 70%; margin-bottom: -20%;">
        <div class="card-header">
            Having issues with your order ?
        </div>
        <div class="card-body">
            <h5 class="card-title">Online Groceries</h5>
            <p class="card-text">Contact your local store with any issues about your online order or dial 514-848-2424
                for our 24/7 customer support line.</p>

        </div>
    </div>


    <!--Using Boot Strap Website as well as W3school for reference -->
    <!--Using Boot Strap Website as well as W3school for reference -->
    <!--Using Boot Strap Website as well as W3school for reference -->
    <footer class="container-fluid"
        style="background-color:#334754; margin-top: 500px; padding-bottom: 20px; padding-top:40px;">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="text-center">Follow Us</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="#" style="padding-right: 8px;"><i
                                class="fab fa-facebook-square fa-3x" style="color: white;"></i></a>
                        <a class="text-muted" href="#" style="padding-right: 8px;"> <i class="fab fa-instagram fa-3x"
                                style="color: white;"></i></a>
                        <a class="text-muted" href="#"><i class="fab fa-twitter-square fa-3x"
                                style="color: white;"></i></a>
                    </li>
                </ul>
            </div>
            <div class=" col-lg-4">
                <h5 class="text-center">Resources</h5>
                <ul class="list-unstyled text-small text-center">
                        <!--has the link to go and complete the form-->
                    <li><a class="text-muted"   href="php/contact_us.php"  ><span style="color: white;">Contact Us</span></a></li>

                    <li><a class="text-muted" href="#"><span style="color: white;">About Us</span></a></li>
                    <!--IGA 5600 Boul Henri-Bourassa O, Montréal, QC H4R 0B8-->
                    <li><a class="text-muted"
                            href="https://www.google.com/maps/place/IGA+extra+March%C3%A9+Duchemin+et+Fr%C3%A8res+inc./@45.4946104,-73.749825,11.74z/data=!4m8!1m2!2m1!1sIGA+montreal!3m4!1s0x4cc9229a0a52ef73:0x8f71f920518a186e!8m2!3d45.5172748!4d-73.7151113"><span
                                style="color: white;">Our Map</span></a></li>
                    <li><a class="text-muted" href="#"><span style="color: white;">Coupons</span></a></li>
                    <li><a class="text-muted" href="#"><span style="color: white;">FAQ</span></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="text-center">Newsletter</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><span style="color: white;">Sign Up to stay up to date with our offers and more</span><a
                            class="text-muted" href="#"><span style="color:#e04362; padding-left: 5px;">Learn
                                More</span></a>
                    </li>
                    <li>
                        <form>
                            <input type="text" placeholder="Enter Your Email" class="form-control"
                                style="border-radius: 20px; border-style: none; margin-top: 10px;">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </footer>




    <!--CDN import for header & footer-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>


</body>

</html>
