<?php
 include ("products.php");
 include ("cartHeader.php");

$content= file_get_contents("../data/cartOrder.txt")."<br/>";           //Saves As a String

$data=explode("\n",$content);

$num= sizeof($data);

$items=array();
$price=array();
$qty=array();

for($x=0; $x<$num;$x++)
{
    $temp= explode(";",$data[$x]);
    array_push($items,$temp[0]);
    array_push($price,$temp[1]);
        
    if($x<$num-1)
    {
         array_push($qty,$temp[2]);
    }
        
    else
    {
        $temp= explode("<br/>",$temp[2]);
        array_push($qty,$temp[0]);
    }
}

?>

    <!--Main Section of the page-->
    <div class="container">

        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
                <h2 class="text-center" style="color:#334754;">My Cart</h2>
                <div class="table-responsive">
                <?php
                    echo "<table class='table' id='myTableCart'>";
                    $subtotal=0;
                    $arr= array();
                    
                    $bbp=0;
                    $fvp=0;
                    $dep=0;
                    $bp=0;
                    $npfp=0;
                    $ffp=0;
                    
                    
    
                        
                        for($x=0;$x<$num;$x++)
                        {
                            if(category($items[$x])=="Bread & Bakery")
                            {
                                $img=findImg($items[$x]);
                                $subtotal+=$price[$x]*$qty[$x];   
                                $unitPrice= $price[$x]*$qty[$x]; 
                                
                                if($bbp<1)
                                {
                                    echo"

                                    <tr style='border-color: white;'>
                                        <th colspan='5' class='text-center table-dark'
                                            style='border-radius: 20px; border-color:white; padding:2px; background-color:#334754;'>
                                            <h4>Bread & Bakery</h4>
                                        </th>
                                    </tr>";
                                    $bbp=1;
                                }

                                echo "
                        
                                <tr style='border-color: white;'>
                                    <td><img src='$img'> </td>
                                    <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                            <input type='text' value=$qty[$x] disabled>
                                            <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                        </form>
                                    </td>

                                    <td style='vertical-align: middle;'>$$unitPrice</td>
                        
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                        </form>
                                    </td>

                                </tr>";

                            }
                        }

                        for($x=0;$x<$num;$x++)
                        {
                         if(category($items[$x])=="Dairy & Eggs")
                         {
                            $img=findImg($items[$x]);
                            $subtotal+=$price[$x]*$qty[$x];  
                            $unitPrice= $price[$x]*$qty[$x];  

                             if($dep<1)
                             {
                                 echo"
 
                                 <tr style='border-color: white;'>
                                     <th colspan='5' class='text-center table-dark'
                                         style='border-radius: 20px; border-color:white; padding:3px; background-color:#334754;'>
                                         <h4>Dairy & Eggs</h4>
                                     </th>
                                 </tr>";
                                 $dep=1;
                             }
 
                             echo "
                             <tr style='border-color: white;'>
                                 <td><img src=$img> </td>
                                 <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                 <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                        <input type='text' value=$qty[$x] disabled>
                                        <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                    </form>
                                 </td>
 
                                 <td style='vertical-align: middle;'>$$unitPrice</td>
                     
                                 <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                    </form>
                                 </td>
                             </tr>";
                          }

                        }

                        for($x=0;$x<$num;$x++)
                        {
                          if(category($items[$x])=="Fruits & Vegetables")
                          {
                            $img=findImg($items[$x]);
                            $subtotal+=$price[$x]*$qty[$x]; 
                            $unitPrice= $price[$x]*$qty[$x];   

                              if($fvp<1)
                              {
                                  echo"
  
                                  <tr style='border-color: white;'>
                                      <th colspan='5' class='text-center table-dark'
                                          style='border-radius: 20px; border-color:white; padding:3px; background-color:#334754;'>
                                          <h4>Fruits & Vegetables</h4>
                                      </th>
                                  </tr>";
                                  $fvp=1;
                              }
  
                              echo "
                              <tr style='border-color: white;'>
                                <td><img src=$img> </td>
                                <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                        <input type='text' value=$qty[$x] disabled>
                                        <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                    </form>
                                </td>

                                <td style='vertical-align: middle;'>$$unitPrice</td>
                    
                                <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                    </form>
                                </td>
                             </tr>";
                           }
                        }

                        for($x=0;$x<$num;$x++)
                        {
                           if(category($items[$x])=="Butchery")
                           {
                            $img=findImg($items[$x]);
                            $subtotal+=$price[$x]*$qty[$x]; 
                            $unitPrice= $price[$x]*$qty[$x];   

                               if($bp<1)
                               {
                                   echo"
                                
                                   <tr style='border-color: white;'>
                                       <th colspan='5' class='text-center table-dark'
                                           style='border-radius: 20px; border-color:white; padding:3px; background-color:#334754;'>
                                           <h4>Butchery</h4>
                                       </th>
                                   </tr>";
                                   $bp=1;
                               }
   
                               echo "
                               <tr style='border-color: white;'>
                                    <td><img src=$img> </td>
                                    <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                            <input type='text' value=$qty[$x] disabled>
                                            <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                        </form>
                                    </td>

                                    <td style='vertical-align: middle;'>$$unitPrice</td>
                        
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                        </form>
                                    </td>
                              </tr>"; 
                            }
                        }


                        for($x=0;$x<$num;$x++)
                        {
                            if(category($items[$x])=="Non-Perishable Food")
                            {
                                $img=findImg($items[$x]);
                                $subtotal+=$price[$x]*$qty[$x];  
                                $unitPrice= $price[$x]*$qty[$x];  

                                if($npfp<1)
                                {
                                    echo"
                                    </br>
    
                                    <tr style='border-color: white;'>
                                        <th colspan='5' class='text-center table-dark'
                                            style='border-radius: 20px; border-color:white; padding:3px; background-color:#334754;'>
                                            <h4>Non-Perishable Food</h4>
                                        </th>
                                    </tr>";
                                    $npfp=1;
                                }
    
                                echo "
                                <tr style='border-color: white;'>
                                    <td><img src=$img> </td>
                                    <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                    <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                        <input type='text' value=$qty[$x] disabled>
                                        <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                    </form>
                                    </td>

                                    <td style='vertical-align: middle;'>$$unitPrice</td>
                        
                                    <td style='vertical-align: middle;'>
                                    <form action='test.php' method='post'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                    </form>
                                    </td>
                                </tr>";
                             }
                        }

                        for($x=0;$x<$num;$x++)
                        {
                             if(category($items[$x])=="Frozen Food")
                             {
                                $img=findImg($items[$x]);
                                $subtotal+=$price[$x]*$qty[$x]; 
                                $unitPrice= $price[$x]*$qty[$x];   

                                 if($ff<1)
                                 {
                                     echo"
     
                                     <tr style='border-color: white;'>
                                         <th colspan='5' class='text-center table-dark'
                                             style='border-radius: 20px; border-color:white; padding:3px; background-color:#334754;'>
                                             <h4>Frozen Food</h4>
                                         </th>
                                     </tr>";
                                     $ff=1;
                                 }
     
                                 echo "
                                 <tr style='border-color: white;'>
                                    <td><img src=$img> </td>
                                    <td style='vertical-align: middle; font-size:23px; color:#334754;'>$items[$x]</td>
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='add'><i class=' fas fa-plus-circle'></i></button>
                                            <input type='text' value=$qty[$x] disabled>
                                            <button type='submit' name='sub'><i class='fas fa-minus-circle'></i></button>
                                        </form>
                                    </td>
    
                                    <td style='vertical-align: middle;'>$$unitPrice</td>
                        
                                    <td style='vertical-align: middle;'>
                                        <form action='test.php' method='post'>
                                            <input type='text' name='it' value='$items[$x]' hidden>
                                            <button type='submit' name='d'><i class='far fa-trash-alt'></i></i></button>
                                        </form>
                                    </td>
                                </tr>";
                              }
                        }
    
                echo 
                "</table>
                <form action='test.php' method='POST'>
                    <div style='text-align: center;'>
                        <button type='submit' name='delAll'><i class='fas fa-shopping-cart'></i> EMPTY CART</i></button>
                    </div>
                </form>";
                ?>
                </div>
            </div>



            <div style="margin-top: 50px; box-shadow: 0 0.8em 0.8em -0.4em;" class="col-md-4">
                <h2 class="text-center" style="color:#334754;">Cart Summary</h2>
                <div class="table-responsive">
                    <?php
                    $gst=number_format($subtotal*0.05, 2, '.', '');
                    $qst=number_format($subtotal*0.09975, 2, '.', '');
                    $total= number_format($gst+$qst+$subtotal, 2, '.', '');
                    echo"
                    <table class='table' id ='mySubtotalCart' border='1'>

                        <tr>
                            <th class=>Subtotal</th>
                            <td>$$subtotal</td>
                        </tr>

                        <tr>
                            <th>GST</th>
                            <td>$$gst</td>

                        </tr>

                        <tr>
                            <th>QST</th>
                            <td>$$qst</td>

                        </tr>

                        <tr>
                            <th class='table-dark' style='background-color:#334754;'>Total</th>
                            <td>$$total</td>
                        </tr>
                    </table>";
                    ?>

                    <a href="CheckoutSuccess.php"><button type="button">CHECKOUT</button></a>
                    <a href="../index.php">
                        <button type="button" id="specialButton" style="margin-bottom: 10px;">CONTINUE SHOPPING</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php 
    include("cartFooter.php");
?>
