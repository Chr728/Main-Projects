<?php 
    //The header
    include("headerForAisles.php");
    include("organizingProduct_FE.php");

$numProd = count($dairy);

$name = array();
$price = array();
$weeklyDeal = array();
$weight = array();
$pricePerWeight = array();
$productNum = array();
$image = array();

for($i = 0 ; $i<$numProd ; $i++){
    $temp = explode(";", $dairy[$i]);

    array_push($name, $temp[0]);
    array_push($price, $temp[3]);
    array_push($weeklyDeal, $temp[4]);
    array_push($weight, $temp[5]);
    array_push($productNum, $temp[10]);
    array_push($pricePerWeight, $temp[6]);

if($name[$i] == $item[$num-1]){

        $lastImg = substr($temp[12], 0 ,-5);
        array_push($image, $lastImg);
    }

else{
    array_push($image, $temp[12]);
    }   

} 

include("findFile.php");
$file = array();
for($i = 0 ; $i < $numProd ; $i++){
    array_push($file, findProdFile($productNum[$i]));
}

?>

   <!--The banner-->
   <br></br>
    <center> <img class="img-fluid" src="../Images/Dairy&Eggs.jpg " alt="banner for dairy & eggs"> </center>
    <br></br>

   <!--buttons on top-->
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <!--The shop by category button-->
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Shop by category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Bakery_Relevance.php">Bakery</a>
                    <a class="dropdown-item" href="Butchery_Relevance.php">Butchery</a>
                    <a class="dropdown-item" href="Dairy&Eggs_Relevance.php">Dairy & Eggs</a>
                    <a class="dropdown-item" href="Frozen_Relevance.php">Frozen</a>
                    <a class="dropdown-item" href="F&V_Relevance.php">Fruits & Vegetables</a>
                    <a class="dropdown-item" href="Pantry_Relevance.php">Pantry</a>
                </div>
            </div>
        </div>
         <!--The sort by button-->
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sort by
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Dairy&Eggs_Relevance.php">Relevance</a>
                    <a class="dropdown-item" href="Dairy&Eggs_AZ.php">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_ZA.php">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_PriceLH.php">Price (low to high)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_PriceHL.php">Price (high to low)</a>
                </div>
            </div>
        </div>
    </div>

      <div class = "container" style =  "width: 85%; margin-top: 2%; border-left:2px solid black;">
        <div class="row">
            <!--The menu on the side-->
            <div class="col-sm-2 d-none d-md-block"  style = "border-right:2px solid black;">
                <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Dairy & Eggs</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">Cheese & Yogurt</td>
                        </tr>
                        <tr>
                            <td scope="row">Eggs</td>
                        </tr>
                        <tr>
                            <td scope="row">Milk, Cream & Butter</td>
                        </tr>
                        </tbody>
                </table>
            </div>
    
            <div class = "col-md-10"> 
                      <!--The cheese & yogurt header-->
    <div>
        <h4>Cheese & Yogurt</h4>
    </div>
    <!--The grid for the product (bootstrap)-->

    <div class="container">
        <!--First row-->
        <div class="row" >
            <?php
            //First product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[0]'><img class='img-fluid' src='../Images/$image[0]'
                        alt='$name[0]'></imag></a>
            </center>
            <a href='$file[0]'>$name[0]</a>
            ";

            if($weeklyDeal[0] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[0]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[0]</span> ea.</b>
                    <p id='oldPrices'>$price[0] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[0])</p>
                <p id='p1'>$pricePerWeight[0]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Second product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[1]'><img class='img-fluid' src='../Images/$image[1]'
                        alt='$name[1]'></imag></a>
            </center>
            <a href='$file[1]'>$name[1]</a><br />
            <br />
            ";

            if($weeklyDeal[1] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[1]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[1]</span> ea.</b>
                    <p id='oldPrices'>$price[1] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[1])</p>
                <p id='p1'>$pricePerWeight[1]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Third product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[2]'><img class='img-fluid' src='../Images/$image[2]'
                        alt='$name[2]'></imag></a>
            </center>
            <a href='$file[2]'>$name[2]</a>
            ";
            
            if($weeklyDeal[2] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[2]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[2]</span> ea.</b>
                    <p id='oldPrices'>$price[2] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[2]</p>
                <p id='p1'>$pricePerWeight[2]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";

            ?>
        </div>
    </div>
    <!--Second row-->
    <div class="container">
        <div class="row" >
            <!--First Product-->
            <?php
            //First product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[3]'><img class='img-fluid' src='../Images/$image[3]'
                        alt='$name[3]'></imag></a>
            </center>
            <a href='$file[3]'>$name[3]</a>
            ";

            if($weeklyDeal[3] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[3]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[3]</span> ea.</b>
                    <p id='oldPrices'>$price[3] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[3]</p>
                <p id='p1'>$pricePerWeight[3]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Second product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[4]'><img class='img-fluid' src='../Images/$image[4]'
                        alt='$name[4]'></imag></a>
            </center>
            <a href='$file[4]'>$name[4]</a>
            <br />
            ";

            if($weeklyDeal[4] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[4]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[4]</span> ea.</b>
                    <p id='oldPrices'>$price[4] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[4]</p>
                <p id='p1'>$pricePerWeight[4]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            ?>
            <!--Third Product-->
            <div class="col-sm" id="emptyslots">
            </div>

        </div>
    </div>

    <!--The eggs header-->

    <div>
        <center>
            <h4>Eggs</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <?php
            //First product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[5]'><img class='img-fluid' src='../Images/$image[5]'
                        alt='$name[5]'></imag></a>
            </center>
            <a href='$file[5]'>$name[5]</a><br /><br />
            ";

            if($weeklyDeal[5] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[5]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[5]</span> ea.</b>
                    <p id='oldPrices'>$price[5] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[5]</p>
                <p id='p1'>$pricePerWeight[5]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Second product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[6]'><img class='img-fluid' src='../Images/$image[6]'
                        alt='$name[6]'></imag></a>
            </center>
            <a href='$file[6]'>$name[6]</a><br />
            <br />
            ";

            if($weeklyDeal[6] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[6]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[6]</span> ea.</b>
                    <p id='oldPrices'>$price[6] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[6]</p>
                <p id='p1'>$pricePerWeight[6]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";

            //Third product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[7]'><img class='img-fluid' src='../Images/$image[7]'
                        alt='$name[7]'></imag></a>
            </center>
            <a href='$file[7]'>$name[7]</a><br />
            <br />
            ";

            if($weeklyDeal[7] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[7]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[7]</span> ea.</b>
                    <p id='oldPrices'>$price[7] ea.</p>";
                } 

            echo "
                <p id='p1'>$weight[7]</p>
                <p id='p1'>$pricePerWeight[7]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            ?>

        </div>
    </div>
    <!--The milk, cream & butter header-->
    <div>
        <h4>Milk, Cream & Butter</h4>
    </div>
    <!--The grid for the product (bootstrap)-->

    <div class="container">
        <!--First row-->
        <div class="row" >
        <?php
            //First product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[8]'><img class='img-fluid' src='../Images/$image[8]'
                        alt='$name[8]'></imag></a>
            </center>
            <a href='$file[8]'>$name[8]</a><br /><br />
            ";

            if($weeklyDeal[8] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[8]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[8]</span> ea.</b>
                    <p id='oldPrices'>$price[8] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[8])</p>
                <p id='p1'>$pricePerWeight[8]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Second product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[9]'><img class='img-fluid' src='../Images/$image[9]'
                        alt='$name[9]'></imag></a>
            </center>
            <a href='$file[9]'>$name[9]</a><br />
            <br />
            ";

            if($weeklyDeal[9] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[9]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[9]</span> ea.</b>
                    <p id='oldPrices'>$price[9] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[9])</p>
                <p id='p1'>$pricePerWeight[9]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";

            //Third product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[10]'><img class='img-fluid' src='../Images/$image[10]'
                        alt='$name[10]'></imag></a>
            </center>
            <a href='$file[10]'>$name[10]</a><br />
            <br />
            ";

            if($weeklyDeal[10] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[10]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[10]</span> ea.</b>
                    <p id='oldPrices'>$price[10] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[10])</p>
                <p id='p1'>$pricePerWeight[10]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            ?>
        </div>
    </div>
    <!--Second row-->
    <div class="container">
        <div class="row" >
        <?php
            //First product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[11]'><img class='img-fluid' src='../Images/$image[11]'
                        alt='$name[11]'></imag></a>
            </center>
            <a href='$file[11]'>$name[11]</a><br /><br />
            ";

            if($weeklyDeal[11] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[11]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[11]</span> ea.</b>
                    <p id='oldPrices'>$price[11] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[11])</p>
                <p id='p1'>$pricePerWeight[11]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            //Second product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[12]'><img class='img-fluid' src='../Images/$image[12]'
                        alt='$name[12]'></imag></a>
            </center>
            <a href='$file[12]'>$name[12]</a><br />
            <br />
            ";

            if($weeklyDeal[12] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[12]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[12]</span> ea.</b>
                    <p id='oldPrices'>$price[12] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[12])</p>
                <p id='p1'>$pricePerWeight[12]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";

            //Third product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[13]'><img class='img-fluid' src='../Images/$image[13]'
                        alt='$name[13]'></imag></a>
            </center>
            <a href='$file[13]'>$name[13]</a><br />
            <br />
            ";

            if($weeklyDeal[13] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[13]</span> ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[13]</span> ea.</b>
                    <p id='oldPrices'>$price[13] ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[13])</p>
                <p id='p1'>$pricePerWeight[13]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
                </div>
            ";
            ?>

        </div>
    </div>
            </div>
            
        </div>
    </div>

  

    <!--The button for the pages-->
    <br></br>
    <center>
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
    </center>

 <!--The footer-->
<?php
    include ("footerForAisle.php");
?>