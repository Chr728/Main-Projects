<?php
    $productList = file_get_contents("../data/newProdList.txt")."</br>";

    $products = explode("\n", $productList);

    $num = count($products);

    $name = array();
    $aisle = array();
    $subAisle = array();
    $price = array();
    $weeklyDeal = array();
    $weight = array();
    $pricePerWeight = array();
    $subdes1 = array();
    $subdes2 = array();
    $subdes3 = array();
    $productNum = array();
    $quantity = array();
    $image = array();

    for($i = 0 ; $i<$num ; $i++){
        $temp = explode(";", $products[$i]);

        array_push($name, $temp[0]);
        array_push($aisle, $temp[1]);
        array_push($subAisle, $temp[2]);
        array_push($price, $temp[3]);
        array_push($weeklyDeal, $temp[4]);
        array_push($weight, $temp[5]);
        array_push($pricePerWeight, $temp[6]);
        array_push($subdes1, $temp[7]);
        array_push($subdes2, $temp[8]);
        array_push($subdes3, $temp[9]);
        array_push($productNum, $temp[10]);
        array_push($quantity, $temp[11]);

        if($i < $num-1){
            array_push($image, $temp[12]);
        }
        else{
            $lastImg = substr($temp[12], 0 ,-5);
            array_push($image, $lastImg);
        }
    } 
    
    include("headerProductList.php");
    include("deleteProductList.php");

?>

<center>

<div id = "ProductList" class="col-md-11">
    <h2 class="text-center" style="color:#334754;">Product List</h2>
    <div class="table-responsive">
    <!--Table of the products-->
    <table class="table" id = "productsTable" border="1">
        <!--First row with the collection-->
        <tr>
            <th colspan="8" class="table-dark" style="background-color:#334754;">All Products</th>

        </tr>
        <!--Second row with buttons-->
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Collection</td>
            <!--The dropdown button for the different categories-->
            <td></td>
           <!--The button to add a product-->
           <td><button type="button"><a href = "AddProductForm.php">Add Product</a></button></td>
           <!--The button to delete all product on the page-->
           <td></td>

        </tr>
        <!--Row for the title of each column-->
        <tr>
            <td> </td>
            <td>Name</td>
            <td>Aisle</td>
            <td>Product Number</td>
            <td>Price</td>
            <td>Inventory</td>
            <td> </td>
            <td> </td>
        </tr>

        <?php
           
        for($i = 0 ; $i<$num-1; $i++){

            echo " 
                <form action='deleteProductList.php' method='POST'>
                <tr>
                    <th><img class = 'img-fluid' src = '../Images/$image[$i]'/></th>
                    <td>$name[$i]</td>
                    <td>$aisle[$i]</td>
                    <td>$productNum[$i]</td>
                    ";
                    
                     if($weeklyDeal[$i] == 'no deal')
                         echo "<td>$price[$i]</td>";
                    else{
                        echo "<td style = 'color: red;'>$weeklyDeal[$i]</td>";
                    }        

            echo "
                    <td>$quantity[$i]</td>
                    <td><button type='button'> <a href = 'editProduct.php'>Edit</a></button></td>
                    <td>
                    <input type='text' name='it' value='$name[$i]' hidden>
                    <button type='submit' name = 'deleteP'>Delete</button>
                    </td>
                </tr>
                </form>
                ";
        }
             
        ?>

    </table>
    </div>
    <br />
</div>

</center>

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
