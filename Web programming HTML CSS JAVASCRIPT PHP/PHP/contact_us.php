<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
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
    <!--javascripts script begins here including all the necessary functions-->
    <script type="text/javascript"   >
    // the first function called flields represent the form boxes where it checks first of all if they are empty or not 
    // it also verifies if the order number entered is in the correct format or not and and finally ater submission is done it  resets and clears all the content of boxes
    // "ok" variable here it represents  a variable that takes the id of each boxes and if each box is fine and ok to whether it is empty or not for each box 
    function fields(){
        var ok = document.getElementById("ordernumber");
        var ok2 = document.getElementById("last_name");
        var ok3 = document.getElementById("inputEmail");
        
        var ok5 = document.getElementById("phone");
        var ok6 = document.getElementById("text");
        var ok7 = document.getElementById("first_name");
       
       

    //    document.write(ok7.value);
       

        // the variable ok1 is the variable that has the correct format of the order box and it is checked againts all the other boxes that exist in the page
        let ok1=/^[1-9]{5}[A-Z]{2}$/;
        // if any of the fields is empty it will display an alert to make the user enter soemthing a text input in the boxes
        if(( ok.value == "" || ok7.value == ""  || ok2.value == "" || ok3.value == "" || ok5.value == "" || ok6.value == "") || ( ok.value == "" || ok7.value == ""  && ok2.value == "" && ok3.value == ""  && ok5.value == "" && ok6.value == ""))    
                {

                    alert(" One or more   fields are left empty, please answer  all of  the following boxes.")
                    return false;
                    
                } 
                
        // if the boxes are not empty but the entered order number format does not correspond to the correct format then it will display an alert and ask the user to try it again
         if( !(ok.value.match(ok1)) &&  !(( ok.value == "" || ok7.value == ""  || ok2.value == "" || ok3.value == "" || ok5.value == "" || ok6.value == "") || ( ok.value == "" || ok7.value == ""  && ok2.value == "" && ok3.value == ""  && ok5.value == "" && ok6.value == "")) )
         {
            alert(" Your order number is not correct please try again  entering your correct order number in the format *12345AB*.")
            return false;
        }


        
        // after checking if the user has entered all boxes , and correct order format and none of them is empty display an alert confirming that the request was submitted and clears the form  
        else{
            //  alert("Your request was submitted successfully, one of our customer service representatives will contact you  within a delay of 24 hours.")
            //  ok.value = "";  ok2.value = ""; ok3.value = ""; ok4.value = ""; ok5.value = ""; ok6.value = "" ; ok7.value = "";document.getElementById("exampleFormControlTextarea1").value = ""; 
               
              return true;
         }   
          
           
   
           
   }
  
    
</script>    
</head>


<body>

    
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="../index.php"><img src="../Images/logo.png" class="img-fluid"
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
                            <li><a class="dropdown-item" href="php/Dairy&Eggs_Relevance.php">Dairy & Eggs</a></li>
                            <li><a class="dropdown-item" href="php/F&V_Relevance.php">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="php/Bakery_Relevance.php">Bakery</a></li>
                            <li><a class="dropdown-item" href="php/Butchery_Relevance.php">Butchery</a></li>
                            <li><a class="dropdown-item" href="php/Pantry_Relevance.php">Non-Perishable Food</a></li>
                            <li><a class="dropdown-item" href="php/Frozen_Relevance.php">Frozen Food</a></li>
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



    <form   action= "display.php" method="POST" >
        
        <div class="container">
            <hr style="margin-bottom:4%">
               <!--it starts the begining of the form where it asks the user to fill it out-->
            <p style="margin-left: 60px; color: grey; font-size: large;" >Submit this form and we will be able to assist you with all your questions regarding your online order.</p>

            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 60px; margin-right:60px">

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-5">
                   
                           <!-- Asks the user to enter their first name and it mentioned that it is required-->
                        <label for="first_name">First Name(Required).</label>
                        <input type="text" name= "first" class="form-control"   id="first_name"  placeholder="First name" >
                    </div>
                 
                    <div class="form-group col-sm-5">
                           <!--Asks the user for their family name-->
                        <label for="last_name">Last Name(Required).</label>
                        <input type="text" name="last" class="form-control" id="last_name" placeholder=" Last Name">
                    </div>
                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-5">
                           <!--Asks the user for their email address-->
                        <label for="inputEmail"> Your acccount related Email Address(Required).</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    
                    <div class="form-group col-sm-5" id="ordernum">
                           <!--Asks the user for their order number-->
                        <label for="confEmail"> Order number(Required). </label>
                       
                        <input type="item" name="onumber" class="form-control"  name= "order" id="ordernumber"  placeholder="order  number" >
                    </div>

                </div>

                <div class="form-row justify-content">
                    <div class="form-group col-sm-5" style= "margin-left:8%;">
                        <label for="inputPassword">Telephone number(Required). </label>
                        <input type="text" name = "tel" class="form-control" id="phone" placeholder="# Telephone">
                    </div>
                   


            
                   
                </div>
                <div class="form-row justify-content-center">
                <div class="form-group col-sm-10">
               
                      <label for="exampleFormControlTextarea1" class="form-label" id= "text">Type your question(s) here(Required).</label>
                        <textarea class="form-control" name="question" id="exampleFormControlTextarea1" rows="8"></textarea>
                      
                </div>


                <br><br><br>
                    </div>
                    <br><br><br>
                    <div class="form-row justify-content-center">
                    <div class="form-group col-sm-1">
                    <!--Ask the user to submit after they are done with the form-->
                    <a href="#"  class="editButton"    style = "color:blue;text-align: center; padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:50px; margin-bottom: 30px;margin-left: 3% "><a
                        style="text-decoration: none;
                        color: white;font-size:16px; " ><input type="submit"  class="btn btn-primary"  onsubmit="return fields()" onclick="fields()" name="submit"> 
                    </button ></a>
               

                    <br /><br />
                        
                    </div>

                    </div>
                    <button type="button" 
                    style="  padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:50px; margin-bottom: 30px;margin-left: 3% "><a
                        style="text-decoration: none;
                        color: white;font-size:16px;" href="../index.php">BACK </a></button>
        </div>
        </div> 

        </form>
                      


        

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