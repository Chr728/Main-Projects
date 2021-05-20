<?php 
    //The header
    include("headerForAisles.php");
    include("organizingProduct_FE.php");

$numProd = count($frozen);

$name = array();
$price = array();
$weeklyDeal = array();
$weight = array();
$pricePerWeight = array();
$productNum = array();
$image = array();

for($i = 0 ; $i<$numProd ; $i++){
    $temp = explode(";", $frozen[$i]);

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
    <center> <img class="img-fluid" src="../Images/Frozen.jpg" alt="banner for Frozen"> </center>
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
                    <a class="dropdown-item" href="Frozen_Relevance.php">Relevance</a>
                    <a class="dropdown-item" href="Frozen_AZ.php">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="Frozen_ZA.php">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="Frozen_PriceLH.php">Price (low to high)</a>
                    <a class="dropdown-item" href="Frozen_PriceHL.php">Price (high to low)</a>
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
                              <th scope="col">Frozen</th>
                          </tr>
                          </thead>
                          
                  </table>
              </div>
      
              <div class = "col-md-10"> 
                   <!--The frozen header-->
      <div>
          <h4>Frozen</h4>
      </div>
      <!--The grid for the product (bootstrap)-->
  
      <div class="container">
          <!--First row-->
          <div class="row" >
              <?php
                //First product
                echo "<div class='col-sm' id='slots'>
                <center>
                    <a href='$file[1]'><img class='img-fluid' src='../Images/$image[1]' alt='$name[1]'> </img></a>
                </center>
                <a href='$file[1]'>$name[1]</a> <br /><br />";

                if($weeklyDeal[1] == 'no deal')
                    echo "<b id='p1'><span class='bigger'>$price[1]</span> ea.</b>";
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

                //Second product
                echo "<div class='col-sm' id='slots'>
                <center>
                    <a href='$file[2]'><img class='img-fluid' src='../Images/$image[2]' alt='$name[2]'> </img></a>
                </center>
                <a href='$file[2]'>$name[2]</a> <br /><br />";

                if($weeklyDeal[2] == 'no deal')
                    echo "<b id='p1'><span class='bigger'>$price[2]</span> ea.</b>";
                else{
                    echo "<b id='p2'><span class='bigger'>$weeklyDeal[2]</span> ea.</b>
                    <p id='oldPrices'>$price[2] ea.</p>";
                } 
            
                echo "
                    <p id='p1'>($weight[2])</p>
                    <p id='p1'>$pricePerWeight[2]</p>
                    <br></br>
                    <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                    <br></br>
                </div>
                "; 

                //Third product
                echo "<div class='col-sm' id='slots'>
                <center>
                    <a href='$file[0]'><img class='img-fluid' src='../Images/$image[0]' alt='$name[0]'> </img></a>
                </center>
                <a href='$file[0]'>$name[0]</a>";

                if($weeklyDeal[0] == 'no deal')
                    echo "<b id='p1'><span class='bigger'>$price[0]</span> ea.</b>";
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