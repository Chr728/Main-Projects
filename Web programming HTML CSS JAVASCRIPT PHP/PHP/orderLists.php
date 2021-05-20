<!--
    ID: 40135271
    Name: Haris Mahmood
    Part 11: Back End Page, this is a custom design which acts as a page where admin user is able to select a desired 
    product they wish to view. It shows both completed and current orders. When clicked on one takes you to the order.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Icons from fontawesome website is implemented-->
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
</head>

<body>

    <!--Using tutourial 3 Material as well as bootstrap and W3school as resource-->

    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="successadmin.php"><img src="../Images/logo.png"><span id="title">Mom's Favourite
                    Market (ADMIN)</span></a></a>
            <!--LINK TO MAIN PAGE-->
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="ProductList.php" class="nav-link">Product List</a>
                    </li>

                    <li class="nav-item">
                        <a href="backstoreUserAccounts.php" class="nav-link">User List</a>
                    </li>

                    <li class="nav-item">
                        <a href="orderLists.php" class="nav-link">Order List</a>
                    </li>

                    <li class="nav-item">
                        <a href="loginpage2.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>

    <!--Main Section of the page-->
    <div class="container" style="margin-bottom:50px;">
        <div class="row">
            <div class="col-12">

                <h1 class="text-center" style="text-decoration:underline; margin-bottom: 40px; margin-top: 50px;">ORDER
                    LIST</h1>

                <h1
                    style="border: 1px solid black; border-radius: 30px; padding:2px 4px; text-align: center; background-color:#334754; color:white;">
                    (Current Orders)</h1>

                <div class="d-grid gap-2">
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px; margin-top: 15px;">
                        <a href="order4013.php" id="anchorSpecial">Order #12345AB</a>
                    </button>
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px; margin-top: 15px;">
                        <a href="order12345AC.php" id="anchorSpecial">Order #12345AC</a>
                    </button>
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px;">Order #12345AD</button>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1
                    style="border: 1px solid black; border-radius: 30px; padding:2px 4px; text-align: center; background-color:#334754; color:white; margin-top: 50px;">
                    (Completed Orders)</h1>
                <div class="d-grid gap-2">
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px; margin-top: 15px;">Order
                        #12345CD</button>
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px;">Order #12344BC</button>
                    <button class="btn" type="button"
                        style="border-radius: 20px; padding:10px 10px; font-size: 25px;">Order #12343AD</button>
                </div>
            </div>
        </div>

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
<!--The End-->