
<html>
<!--NAME: DIVLEEN KAUR AHLUWALIA, STUDENT ID: 40116121-->


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signuppageHF.css">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">
    <link rel="stylesheet" href="../CSS/main.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>



<body>
    <!--HEADER-->
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

        <!--Alert using bootstrap built in classes-->
        <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
            -- Closing Hours May Vary Due to COVID-19 --
            <button aria-label="Close" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </header>



    <!--MAIN BODY CONTENT-->
    <form name= "myForm" method="post">
        <div class="container">
            <h1 style="text-align:center; color: grey">Register</h1>
            <hr style="margin-bottom:4%">

            <p style="margin-left: 60px; color: grey">User Profile</p>
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 60px; margin-right:60px">

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-5">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder=" First Name" name="fname">
                    </div>
                   

                    <div class="form-group col-sm-5">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder=" Last Name" name="lname">
                    </div>
                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-5">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email_1">
                        <span id="mismatch2" style="display:none;color:#e04362 ;font-style: italic;">Please enter a valid Email ID!</span>
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="confEmail">*Confirm Email</label>
                        <input type="email" class="form-control" id="confEmail" placeholder="Email" name="email_2" required>
                        <span id="mismatch" style="display:none;color:#e04362; font-style: italic;">The email addresses provided do not match!</span>
                    </div>

                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-5">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password_1">
                    </div>
                   

                    <div class="form-group col-sm-5">
                        <label for="confPassword">*Confirm Password</label>
                        <input type="password" class="form-control" id="confPassword" placeholder="Password" required name="password_2">
                        <span id="mismatch_password" style="display:none;color:#e04362;font-style: italic;">The passwords provided do not match!</span>
                    </div>
                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-5">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="provice">Province</label>
                        <select class="form-control" id="province" name="province">
                            <option>Alberta</option>
                            <option>British Columbia</option>
                            <option>Ontario</option>
                            <option>Quebec</option>
                            <option>New Brunswick</option>
                            <option>Nova Scotia</option>
                        </select>
                    </div>
                </div>

                <div class="form-row justify-content-center">

                    <div class="col-sm-5">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="(+1)" name="phone">
                        <span id="mismatch_phone" style="display:none;color:#e04362;font-style: italic;">Invalid phone number. No special characters please!</span>
                    </div>
                    <div class="col-sm-5">
                    </div>
                </div>
            </div>

            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 60px; margin-right:60px">
                <div style="padding-left: 5%; padding-right: 5%">
                    <h3 style="text-align: center;">Subscribing to our e-communications</h3>

                    <input type="checkbox" id="subscription_box_1" name="sub1">
                    <label>I would like to receive the latest deals and promotions offered by Mom's Favorite Market and
                        it's trusted partners.</label><br>
                    <input type="checkbox" id="subscription_box_2" name="sub2">
                    <label>I would like to sign-up for the Mom's Favourite newsletter. It includes: </label>
                    <ul style="margin-left:5%">
                        <li>Popular recipes</li>
                        <li>Upcoming specials and information on your favorite grocery item</li>
                        <li>Nutritional information</li>
                        <li>Product Information</li>
                    </ul>


                    <fieldset class="form-group border p-3">
                        <legend>Our Stores in Montreal:</legend><br>
                        <p>
                            2172 Saint-Catherine St W, Montreal, Quebec H3H 1M9<br>
                            1270, Greene Ave, Westmount, Quebec H3Z 1C3<br>
                        </p>
                    </fieldset>
                    <h2><u>Consent to <a style="color: #7A6F67" href="t&c.php">Terms and
                                Conditions</a></u></strong>
                    </h2>
                    <p>
                        <input type="radio" id="radioCheck" required><sup>*</sup>
                        Yes, I have read and accepted the Terms and Conditions. By checking this box, I hereby agree to
                        them.
                    </p>
                    <button class="btn btn-outline-secondary" name="submit" type="submit" id="signup-submit" onclick="submission()">Create Account</button>
                    <button class="btn btn-outline-secondary"  id="signup-reset">Reset</button>

                    <div class="form-row">
                        <P>Already have an account? Log in <a href="loginpage.php">here</a></P>
                    </div>

                </div>


            </div>

        </div>
    </form>

    <script src="../JS/signupvalidation.js"></script>

    <!--FOOTER-->
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
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
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
