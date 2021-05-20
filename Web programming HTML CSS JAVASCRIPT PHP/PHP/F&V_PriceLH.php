<?php 
    //The header
    include("headerForAisles.php");
    include("organizingProduct_FE.php");

$numProd = count($FV);

$name = array();
$price = array();
$weeklyDeal = array();
$weight = array();
$pricePerWeight = array();
$productNum = array();
$image = array();

for($i = 0 ; $i<$numProd ; $i++){
    $temp = explode(";", $FV[$i]);

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
<center> <img class="img-fluid" src="../Images/Fruits&Veggies.jpg " alt="banner for Fruits & Vegetables"> </center>
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
                    <a class="dropdown-item" href="F&V_Relevance.php">Relevance</a>
                    <a class="dropdown-item" href="F&V_AZ.php">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="F&V_ZA.php">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="F&V_PriceLH.php">Price (low to high)</a>
                    <a class="dropdown-item" href="F&V_PriceHL.php">Price (high to low)</a>
                </div>
            </div>
        </div>
  </div>

<div class = "container" style =  "width: 85%; margin-top: 2%; border-left:2px solid black;">
    <div class="row">
    <div class="col-sm-2 d-none d-md-block"  style = "border-right:2px solid black;">
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Fruits & Vegetables</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td scope="row">Fruits</td>
			</tr>
			<tr>
				<td scope="row">Vegetables</td>
			</tr>
			</tbody>
		</table>
	</div>

    <div class = "col-md-10"> 
        <div>
            <h4>Fruits</h4>
        </div>

        <!--The grid for the product (bootstrap)-->
        <div class="container">
            <div class="row" >
            <?php 
            //First product
            echo "
                <div class='col-sm' id='slots'>
                <center>
                    <a href='$file[1]'><img class='img-fluid' src='../Images/$image[1]' alt='$name[1]'></imag></a>
                </center>
                <a href='$file[1]'>$name[1]</a>
                <br></br>
            ";
            if($weeklyDeal[1] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[1]</span> avg. ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[1]</span> avg. ea.</b>
                    <p id='oldPrices'>$price[1] avg. ea.</p>";
                } 
  
            echo "
                <p id='p1'>($weight[1] avg.)</p>
                <p id='p1'>$pricePerWeight[1]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
            </div>
            ";
            //Second Product
            echo "
            <div class='col-sm' id='slots'>
            <center>
                <a href='$file[2]'><img class='img-fluid' src='../Images/$image[2]' alt='$name[2]'></imag></a>
            </center>
            <a href='$file[2]'>$name[2]</a>
            <br></br>
            ";
            if($weeklyDeal[2] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[2]</span> avg. ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[2]</span> avg. ea.</b>
                    <p id='oldPrices'>$price[2] avg. ea.</p>";
                } 

            echo "
                <p id='p1'>($weight[2] avg.)</p>
                <p id='p1'>$pricePerWeight[2]</p>
                <br></br>
                <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                <br></br>
            </div>
            "; 
            //Third Product
            echo "
                <div class='col-sm' id='slots'>
                <center>
                    <a href='$file[0]'><img class='img-fluid' src='../Images/$image[0]' alt='$name[0]'></imag></a>
                </center>
                <a href='$file[0]'>$name[0]</a>
                <br></br>
            ";
            if($weeklyDeal[0] == 'no deal')
                echo " <b id='p1'><span class='bigger'>$price[0]</span> avg. ea.</b>";
            else{
                echo "<b id='p2'><span class='bigger'>$weeklyDeal[0]</span> avg. ea.</b>
                    <p id='oldPrices'>$price[0] avg. ea.</p>";
                } 
  
            echo "
                <p id='p1'>($weight[0] avg.)</p>
                <p id='p1'>$pricePerWeight[0]</p>
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
            <div class="row">
            <?php
            //First Product
                 echo "
                 <div class='col-sm' id='slots'>
                 <center>
                     <a href='$file[3]'><img class='img-fluid' src='../Images/$image[3]' alt='$name[3]'></imag></a>
                 </center>
                 <a href='$file[3]'>$name[3]</a>
                 <br></br>
                 <p id='p1'>$weight[3]</p>
                ";
                if($weeklyDeal[3] == 'no deal')
                    echo " <b id='p1'><span class='bigger'>$price[3]</span> ea.</b>
                            <p id='p1'>$price[3]/un.</p>";
                else{
                    echo "<b id='p2'><span class='bigger'>$weeklyDeal[3]</span> ea.</b>
                        <p id='oldPrices'>$price[3] ea.</p>";
                    } 
        
                echo "
                    <p id='p1'>$pricePerWeight[3]</p>
                    <br></br>
                    <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                    <br></br>
                </div>
                "; 

            ?>

            <!--Second Product-->
            <div class="col-sm" id="emptyslots">
            </div>
            <!--Third Product-->
            <div class="col-sm" id="emptyslots">
            </div>
            </div>
        </div>

        <div>
        <center><h4>Vegetables</h4></center>
        </div>
            
        <div class="container">
        <!--The first row-->
        <div class="row" >
        <?php 
                //First product
                echo "
                    <div class='col-sm' id='slots'>
                    <center>
                    <a href='$file[5]'><img class='img-fluid' src='../Images/$image[5]' alt='$name[5]'></imag></a>
                    </center>
                    <a href='$file[5]'>$name[5]</a>
                    <p id='p1'>$weight[5]</p>
                    ";
                    if($weeklyDeal[5] == 'no deal')
                        echo " <b id='p1'><span class='bigger'>$price[5]</span> ea.</b>
                                <p id='p1'>$price[5]/un.</p>";
                    else{
                        echo "<b id='p2'><span class='bigger'>$weeklyDeal[5]</span> ea.</b>
                            <p id='oldPrices'>$price[5] ea.</p>";
                            } 
                    
                    echo "
                        <p id='p1'>$pricePerWeight[5]</p>
                        <br></br>
                        <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                        <br></br>
                        </div>
                        "; 

                //Second Product
                echo "
                     <div class='col-sm' id='slots'>
                     <center>
                     <a href='$file[7]'><img class='img-fluid' src='../Images/$image[7]' alt='$name[7]'></imag></a>
                     </center>
                     <a href='$file[7]'>$name[7]</a>
                     <br></br>
                     <p id='p1'>$weight[7]</p>
                     ";
                     if($weeklyDeal[7] == 'no deal')
                         echo " <b id='p1'><span class='bigger'>$price[7]</span> ea.</b>
                                 <p id='p1'>$price[7]/un.</p>";
                     else{
                         echo "<b id='p2'><span class='bigger'>$weeklyDeal[7]</span> ea.</b>
                             <p id='oldPrices'>$price[7] ea.</p>";
                             } 
                     
                     echo "
                         <p id='p1'>$pricePerWeight[7]</p>
                         <br></br>
                         <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                         <br></br>
                         </div>
                         "; 
                //Third product
                 echo "
                    <div class='col-sm' id='slots'>
                    <center>
                    <a href='$file[4]'><img class='img-fluid' src='../Images/$image[4]' alt='$name[4]'></imag></a>
                    </center>
                    <a href='$file[4]'>$name[4]</a>
                    <br></br>
                    <p id='p1'>$weight[4]</p>
                    ";
                    if($weeklyDeal[4] == 'no deal')
                        echo " <b id='p1'><span class='bigger'>$price[4]</span> ea.</b>
                                <p id='p1'>$price[4]/un.</p>";
                    else{
                        echo "<b id='p2'><span class='bigger'>$weeklyDeal[4]</span> ea.</b>
                            <p id='oldPrices'>$price[4] ea.</p>";
                            } 
                    
                    echo "
                        <p id='p1'>$pricePerWeight[4]</p>
                        <br></br>
                        <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                        <br></br>
                        </div>
                        "; 
            ?>
        </div>
        </div>

        <div class="container">
        <!--The second row-->
        <div class="row" >
             <!--The first product-->
             <?php
                   echo "
                   <div class='col-sm' id='slots'>
                   <center>
                       <a href='$file[6]'><img class='img-fluid' src='../Images/$image[6]' alt='$name[6]'></imag></a>
                   </center>
                   <a href='$file[6]'>$name[6]</a>
                   <br></br>
                   ";
                   if($weeklyDeal[6] == 'no deal')
                       echo " <b id='p1'><span class='bigger'>$price[6]</span> avg. ea.</b>";
                   else{
                       echo "<b id='p2'><span class='bigger'>$weeklyDeal[6]</span> avg. ea.</b>
                           <p id='oldPrices'>$price[6] avg. ea.</p>";
                       } 
       
                   echo "
                       <p id='p1'>($weight[6] avg.)</p>
                       <p id='p1'>$pricePerWeight[6]</p>
                       <br></br>
                       <button type='button' class='btn btn-dark btn-sm' id='addToCartStyle'>Add to cart</button>
                       <br></br>
                   </div>
                   ";  
                ?>
                <!--The second product-->
                <div class="col-sm" id="emptyslots">
                </div>
                <!--The third product-->
                <div class="col-sm" id="emptyslots">
                </div>
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