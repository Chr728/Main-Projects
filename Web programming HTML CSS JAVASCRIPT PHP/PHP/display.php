<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">
    <!--some important links of bootstrap fucntions to facilitate the responsiviness of a page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- important citations relative to some fonts used in the file -->
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    
</head>



<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="../index.php"><img src="Images/logo.png" class="img-fluid"
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
                        <a href="../index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aisles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Dairy&Eggs_Relevance.php">Dairy & Eggs</a></li>
                            <li><a class="dropdown-item" href="F&V_Relevance.php">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="Bakery_Relevance.php">Bakery</a></li>
                            <li><a class="dropdown-item" href="Butchery_Relevance.php">Butchery</a></li>
                            <li><a class="dropdown-item" href="Pantry_Relevance.php">Non-Perishable Food</a></li>
                            <li><a class="dropdown-item" href="Frozen_Relevance.php">Frozen Food</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="WeeklyDeals.php" class="nav-link">Weekly Deals!</a>
                    </li>
                    <li class="nav-item">
                        <a href="environment1.php" class="nav-link">Environment</a>
                    </li>
                    <li class="nav-item">
                        <a href="careers.php" class="nav-link">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="About us.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="loginpage.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>
        
                    <li class="nav-item">
                        <a href="Cart.php" class="nav-link"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>


    <form>
        
        <div class="container">
            <hr style="margin-bottom:4%">
               

            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 60px; margin-right:60px">

                <div class="form-row justify-content-center">
                    <h1>Here  is all  the record we have currently in your file. </h1>
                    <label for="exampleFormControlTextarea1" class="form-label" id= "text"> If your contact information is not up to date please update them through your profile.

            <?php
            $match= $_POST['onumber']; // getting the value  of order number
            if(!(empty($_POST['first'] && $_POST['last'] && $_POST['email'] && $_POST['onumber'] && $_POST['tel'] && $_POST['question']))  && preg_match("/^[1-9]{5}[A-Z]{2}$/",$match))
                            { // chekcing if any of them is not empty or does not have bad order number
                        echo "<br>"; echo "<br>"; echo "<br>";
                        $search = $_POST['email']; // finding the user with his email adresss
                        
                        // Read from file
                        $lines = file('../data/userData.txt');
                        $found = false;
                        foreach($lines as $key=>$value)// having a for loop of lines of the files
                        {
                          
                          // Check if the line contains the string we're looking for, and print if it does
                          if(strpos($value, $search) !== false)
                               {  
                               // found the user
                                if($search == 'phil@gmail.com')
                               {
                                $found = true;
                                $next= $key;
                                echo $lines[$next-2]; echo "<br>";
                                   echo $lines[$next-1]; echo "<br>";

                               echo $value;  echo "<br>";
                               echo $lines[$next+4];echo "<br>";
                              // printing order details from the file
                                    echo "<br> Order details are: <br> ";
                                    echo $lines[$next+8];echo "<br>";
                              $content = file_get_contents('../data/bagel.txt');
                                  $file = fopen('../data/bagel.txt', "r+");
                                        $ordernumber= fgets($file);
                                        $itemname= fgets($file);
                                        static $quantity;
                                        $quantity=(int)fgets($file);
                                         echo $itemname." "; echo $quantity; 
                                         $content = file_get_contents('../data/Strawberry.txt');
                                         $file = fopen('../data/Strawberry.txt', "r+");
                                         // printing the item name and quantity
                                         $ordernumber= fgets($file);
                                        $itemname= fgets($file);
                                        static $quantity;
                                        $quantity=(int)fgets($file);
                                        echo "<br>";
                                        echo  $itemname." "; echo $quantity;
                                        $content = file_get_contents('../data/milk.txt');
                                        $file = fopen('../data/milk.txt', "r+");
                                        
                                        $ordernumber= fgets($file);
                                        $itemname= fgets($file);
                                        static $quantity;
                                        $quantity=(int)fgets($file); echo "<br>";
                                        echo $itemname." "; echo $quantity;  echo "<br>";echo "<br>";echo "<br>";       
                                       echo" Your Question  was : " .$_POST['question'];echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                                       echo " <h6> One of our  customer service representatives will contact you as soon as possible !  <h6> ";
                                       echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                                echo " -------------------------Thank you for choosing Mom's favourite Market----------------------";
                               }
                            else{
                                    $found = true;
                                 $next= $key;
                                 echo $lines[$next-2]; echo "<br>";
                                    echo $lines[$next-1]; echo "<br>";
                                 // printing all the information related to the file        
                                echo $value;  echo "<br>";
                                echo $lines[$next+4];echo "<br>";echo $lines[$next+8];echo "<br>";echo $lines[$next+9];echo "<br>";
                                echo $lines[$next+10];echo "<br>";echo $lines[$next+11];echo "<br>";echo $lines[$next+12];echo "<br>";
                                echo $lines[$next+13];echo "<br>";echo $lines[$next+14];echo "<br>";echo "<br>";echo "<br>";
                                echo" Your Question  was : " .$_POST['question'];echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                                echo " <h6> One of our  customer service representatives will contact you as soon as possible !  <h6> ";
                                echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                                echo " -------------------------Thank you for choosing Mom's favourite Market----------------------";
                            }
                              
                               } 
                               
                                  // in case you encounter an empty line stop 
                             elseif($line == "\n"){
                                   break;
                             }
                           
                            
                        }
                        // if user does  not exist then direct to sign up page
                                    if(!$found)
                                        {
                                              
                                            ?>
                                            <script type="text/javascript">
                                            alert("You are not an existing customer Please sign up first !!! ");
                                            window.location.href = "signuppageHF.php";
                                            </script>
                                            <?php
                                       
                                            
                                        }
                        
                    } 
                   
                       // in case any fields are empty then refresh and ask user to fill in blank fields 

                    elseif((empty($_POST['first'] && $_POST['last'] && $_POST['email'] && $_POST['onumber'] && $_POST['tel'] && $_POST['question']))  ||  !((preg_match("/^[1-9]{5}[A-Z]{2}$/",$match))) || ((empty($_POST['first'] && $_POST['last'] && $_POST['email'] && $_POST['onumber'] && $_POST['tel'] && $_POST['question']))  &&  !((preg_match("/^[1-9]{5}[A-Z]{2}$/",$match)))))
                    {
                        header('Location: contact_us.php');
                    }

                                    
                                    ?>
                       

                      </label>
                       
                      
                </div>
               
                <br><br><br>
                    <br><br><br>
                    <div class="form-row justify-content-center">
                    <div class="form-group col-sm-1">
                    <!--Ask the user to submit after they are done with the form-->
                    </div>

                    </div>
                    
        </div>
        </div> 

        </form>
                <br>

        <footer class="container-fluid"
        style="background-color:#334754; margin-top: 400px; padding-bottom: 20px; padding-top:40px;">
        <div class="row">
            <div class="col-lg-4">
                   <!--Some placeholders in the footer -->
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
                         <!-- the link to start the form-->
                        <li><a class="text-muted"   href="contact_us.php"  ><span style="color: white;">Contact Us</span></a></li>

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




    
