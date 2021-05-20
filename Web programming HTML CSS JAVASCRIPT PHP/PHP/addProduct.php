<!DOCTYPE html>
<html>
    <head>
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
            <a class="navbar-brand" href="backPage.html"><img src="../Images/logo.png" class="img-fluid"
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
                        <a href="ProductList.html" class="nav-link">Product List</a>
                    </li>

                    <li class="nav-item">
                        <a href="backstoreUserAccounts.html" class="nav-link">User List</a>
                    </li>

                    <li class="nav-item">
                        <a href="orderLists.html" class="nav-link">Order List</a>
                    </li>

                    <li class="nav-item">
                        <a href="loginpage2.html" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
        <br />
        <p style = "margin-left:2%;">
        The product was added! <br /><br /> 
        Here is a summary of your the product:<br />
        </p>
        <?php
                $name = $_POST["name"];
                $aisle = $_POST["aisle"];
                $subAisle = $_POST["subAisle"];
                $price = $_POST["price"];
                $weeklyDeal = $_POST["weeklyDeal"];
                $weight = $_POST["weight"];
                $pricePerWeight = $_POST["pricePerWeight"];
                $subdes1 = $_POST["subdes1"];
                $subdes2 = $_POST["subdes2"];
                $subdes3 = $_POST["subdes3"];
                $productNum = $_POST["productNum"];
                $quantity = $_POST["quantity"];
                $image = $_POST["image"];
    
                //check the quantity
                if($name == "") $name = null;
                if(empty($aisle)) $aisle = null;
                if($subAisle == "") $subAisle = null;
                if($price == "") $price = null;
                if($weeklyDeal == "") $weeklyDeal = "no deal";
                if($weight == "") $weight = null;
                if($pricePerWeight == "") $pricePerWeight = null;
                if($subdes1 == "") $subdes1 = null;
                if($subdes2 == "") $subdes2 = null;
                if($subdes3 == "") $subdes3 = null;
                if($productNum == "") $productNum = null;
                if($quantity == "") $quantity = null;
                if($image == "") $image = null;

            ?>
            <p style = "margin-left:5%;">  
                The product's name is <?php echo $name; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The aisle is <?php echo $aisle; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The sub-aisle is <?php echo $subAisle; ?>
            </P>
            <p style = "margin-left:5%;"> 
                Price is <?php echo $price; ?>
            </P>
            <p style = "margin-left:5%;">  
                The weekly deal is <?php echo $weeklyDeal; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The weight is <?php echo $weight; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The price per weight is <?php echo $pricePerWeight; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The first sub-description is <?php echo $subdes1; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The second sub-description is <?php echo $subdes2; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The third sub-description is <?php echo $subdes3; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The product number is <?php echo $productNum; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The quantity is <?php echo $quantity; ?>
            </P>
            <p style = "margin-left:5%;"> 
                The image's file name is <?php echo $image; ?>
            </P>
        
            <?php
                $list = "../data/newProdListAisles.txt";
                //$list = "data/productList.txt";
                $productList = fopen($list, "a+");
                if(!$productList)
                {
                    echo "The product could not have been added to the file. Please write it manually.";
                    exit;
                }
                fputs($productList, "$_POST[name];");
                fputs($productList, "$_POST[aisle];");
                fputs($productList, "$_POST[subAisle];");
                fputs($productList, "$_POST[price];");
                fputs($productList, "$weeklyDeal;");
                fputs($productList, "$_POST[weight];");
                fputs($productList, "$_POST[pricePerWeight];");
                fputs($productList, "$_POST[subdes1];");
                fputs($productList, "$_POST[subdes2];");
                fputs($productList, "$_POST[subdes3];");
                fputs($productList, "$_POST[productNum];");
                fputs($productList, "$_POST[quantity];");
                fputs($productList, "$_POST[image];");
                fputs($productList, "\n");
                fclose($productList);
        ?>

    </body>

    </html>