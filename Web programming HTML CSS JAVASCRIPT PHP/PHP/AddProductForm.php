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

    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/ProductPage.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="../php/successadmin.php"><img src="../Images/logo.png" class="img-fluid"
                    alt="Responsive image"><span id="title">Mom's Favourite Market (ADMIN)</span>
            </a>
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

    <form action = "addProduct.php" method = "post">
    <div class="container">
        <div class="row">
        
            <h1 style="text-align: center;">Add Product</h1>
            <table>
                <tr>
                    <td class="text">Name:</td>
                    <td>
                        <input alt="text" alt="productName" name = "name" placeholder="ex: Apple">
                    </td>
                </tr>
                <tr>
                    <td class="text">Aisle:</td>
                    <td>
                        <input alt="text" alt="productName" name ="aisle" placeholder="ex: Fruits & Vegetables">
                    </td>
                </tr>
                <tr>
                    <td class="text">Sub-aisle:</td>
                    <td>
                        <input alt="text" alt="productName" name = "subAisle" placeholder="ex: Fruits">
                    </td>
                </tr>
                <tr>
                    <td class="text">Main Description:</td>
                    <td>
                        <input type="text" alt="price" name = "price" placeholder="ex: $1.41 avg. ea.">
                        <input type="text" alt="weight" name = "weight" placeholder="ex: 1 kg">
                        <input type="text" alt="price/weight" name = "pricePerWeight" placeholder="ex: $1.11/kg">
                    </td>
                </tr>
                <tr>
                    <td class="text">Sub-Description:</td>
                    <td>
                        <input type="text" alt="priceDes" name = "subdes1" placeholder="ex: Price">
                        <input type="text" alt="weightDes" name = "subdes2"placeholder="ex: Weight">
                        <input type="text" alt="price/weightDes" name = "subdes3" placeholder="ex: Price per weight">
                    </td>
                </tr>
                <tr>
                    <td class="text">Product Number:</td>
                    <td>
                        <input type="text" alt="itemId" name = "productNum" placeholder="ex: 111">
                    </td>
                </tr>
                <tr>
                    <td class="text">Quantity in stock:</td>
                    <td>
                        <input type="text" alt="stock" name = "quantity" placeholder="ex: 1">
                    </td>
                </tr>
                <tr>
                    <td class="text">Weekly Deal:</td>
                    <td>
                        <input type="text" alt="stock" name = "weeklyDeal" placeholder="ex: $1.05 avg. ea./empty">
                    </td>
                </tr>
                <tr>
                    <td class="text">Add Image:</td>
                    <td>
                        <input type="text" alt="pic" name = "image" placeholder="ex: apple.png">
                    </td>
                </tr>
            </table>
            <br />
            <center> <input type="submit" id="saveItem" value = "Save"/> </center>
            <button type="button" onclick="myFunction()" id = "SaveProduct">Add Product</button>
            <br />
            <br />
        </div>
    </div>
    </form>
    

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
