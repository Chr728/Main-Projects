<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/ProductPage.css">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    <script>
        function change(target,mod)
            {
                if (mod==true) {
                    ++target.nextElementSibling.value;
                }
                if (mod==false) {
                    if (target.previousElementSibling.value<=1) {
                        target.previousElementSibling.value = 1;
                    }
                    else {
                        --target.previousElementSibling.value;
                    }
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
        
        <!--Main Part of Page-->
        <div class="container">
            <div class="row">

                <?php
                    $file = "../data/newProdList.txt";
                    $readfile = fopen($file,"r");
                    while (!feof($readfile)) {
                        $line = explode(";",fgets($readfile));
                        if (in_array(411, $line)) {
                            break;
                        }
                    }
                    print "
                    <div class='col-md-5'>
                    <img src='../Images/$line[12]' style='margin: 7.5%; max-width: 100%;max-height: 100%;'>
                </div>
                <div class='col-md-7'>
                    <h2 class='product'>$line[0]</h2>
                    <table style='width:100%;'>
                        <tr class='price'>
                            <th><h4>";
                            if ($line[4] == "no deal") {
                                echo $line[3];
                            } else {
                                echo $line[4];
                            }
                            print "</h4></th>
                            <th><h4>$line[5]</h4></th>
                            <th><h4>$line[6]</h4></th>
                        </tr>
                        <tr class='description'>
                            <td>$line[7]</td>
                            <td>$line[8]</td>
                            <td>$line[9]</td>
                        </tr>
                    </table>
                    
                    <div style='margin: 9% 27%;'>
                        <form method='post' action='";
                                if ($_POST[num]>0) {
                                    $file = "../data/newProdList.txt";
                                    $readfile = fopen($file,"r");
                                    while (!feof($readfile)) {
                                        $line = explode(";",fgets($readfile));
                                        if (in_array(411, $line)) {
                                            $newFile = "../data/cartOrder.txt";
                                            $cartFile = fopen($newFile,"a+");
                                            $fullCart = file($newFile);
                                            $passed = false;
                                            for($i=0;$i<sizeof($fullCart);$i++) {
                                                $newLine = explode(";",fgets($cartFile));
                                                if (in_array($line[0], $newLine)) {
                                                    if ($line[4] == "no deal") {
                                                        $fullCart[$i] = $line[0].";".ltrim($line[3],'$').";".$_POST[num]."\n";
                                                    } else {
                                                        $fullCart[$i] = $line[0].";".ltrim($line[4],'$').";".$_POST[num]."\n";
                                                    }
                                                    $fileReset = fopen($newFile,"w");
                                                    for($j=0;$j<sizeof($fullCart);$j++) {
                                                        fwrite($fileReset,$fullCart[$j]);
                                                    }
                                                    $passed = true;
                                                }
                                            }
                                            if(!$passed) {
                                                if ($line[4] == "no deal") {
                                                    fwrite($cartFile,$line[0].";".ltrim($line[3],'$').";".$_POST[num]."\n");
                                                } else {
                                                    fwrite($cartFile,$line[0].";".ltrim($line[4],'$').";".$_POST[num]."\n");
                                                }
                                            }
                                        }
                                    }
                                }                               
                                print "'>
                            <button type='button' onclick='change(this,true)'><i class='fas fa-plus-circle'></i></button>
                            <input type='text' style='border:none;' name='num' value='1' size='1'>
                            <button type='button' onclick='change(this,false)'><i class='fas fa-minus-circle'></i></button>
                            <input type='submit' id='addToCart' name='ID' value='Add to cart'>
                        </form>                        
                    </div>
                    
                    <h6 style='color: gray;text-align: center;'>
                        Our goal is to give you the freshest of products. Be sure to check labels for quality of food.
                    </h6>
                </div>
                <details class='itemID'>
                    <summary>
                        Product Description
                    </summary>
                    <p>
                        Product Number: $line[10]
                    </p>
                </details>
                    ";
                ?>
            </div>
        </div>
    




        <!--Boot Strap Website-->
    <footer class="container-fluid"
    style="background-color:#334754; margin-top: 60px; padding-bottom: 20px; padding-top:40px;">
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
                <li><a class="text-muted" href="contact_us.php"><span style="color: white;">Contact Us
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
                <li><span style="color: white;">Sign Up to stay up to date with out offers and more</span><a
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