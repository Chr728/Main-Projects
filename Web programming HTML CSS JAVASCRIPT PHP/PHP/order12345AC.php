<!--
    ID: 40135271
    Name: Haris Mahmood
    Part 11: Back end order list page where the orders are displayed.
-->
<?php 

 //Contents of the whole text file
 $content= file_get_contents("../data/bCart.txt")."<br/>";           //Saves As a String

 //----------------------------------------------

 //Collect the information from the order
 $data=explode("\n",$content);

 $orderNumber=$data[0];
 $num= sizeof($data);

 $items=array();
 $price=array();
 $qty=array();

 for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$data[$x]);
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
 $num=sizeof($items);

    include ("backHeader.php");
    include ("backendCart.php");
?>



    <!--Main Section of the page-->
    <div class="container"
        style="box-shadow: 0 0.8em 0.8em -0.4em; margin-top: 50px; padding-left: 30px; border-radius: 50px; padding-bottom: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col">

                <h1 style="margin-top: 40px; color:#334754;">Order #12345AC</h1>

                <div class="table-responsive">
                    <div class="main">
                        <table class="table" id="ed">
                             
                        <?php
                        echo"
    
                            <tr>
                                <td colspan='6'>
                                    <form action='backendCart.php' method='POST' style='float: right; margin-top:20px;'>
                                        <input type='text' name='enter' placeholder='Add Product'
                                            style='border-radius:20px;width: 300px; padding-top:2.5px;padding-bottom:2.5px;margin-bottom:5px;border-color: #334754; border: 1px solid black;'>
                                        <button type='submit' name='add'><i class='fas fa-plus-circle'></i></button>
                                    </form>
                                </td>
                            </tr>";
                        ?>
                            <tr>
                                <th></th>
                                <th style="color:#334754; font-size: 22px;">PRODUCT</th>
                                <th style="color:#334754; font-size: 22px;">QTY</th>
                                <th style="color:#334754; font-size: 22px;">PRICE</th>
                                <th></th>
                                <th></th>
                            </tr>
                            

                        <?php

                        for($x=0;$x<$num;$x++)
                        {
                 
                            $img=findImg($items[$x]); 
                        
                            echo
                            "
                            <form action='backendCart.php' method='POST'>
                            <tr>
                                <td> <img src=$img></td>
                                <td style='vertical-align: middle; color:#334754; font-size:20px;'>$items[$x]</td>
                                <td style='vertical-align: middle; color:#334754; font-size:20px;'>$qty[$x]</td>
                                <td style='vertical-align: middle; color:#334754; font-size:20px;'>$$price[$x]</td>
                                <td style='vertical-align: middle; font-size:17px;'>
                                        <input type='text' name='it' value='$items[$x]' hidden>
                                        <button type='submit' name='deleItem'><i class='far fa-times-circle'></i></button>
    
                                </td>
                                <td style='vertical-align: middle;  font-size:17px;'>
                                    <input type='text' name='itemI' value='$items[$x]' hidden>
                                    <input type='text' name='qtyQ' value='$qty[$x]' hidden>
                                    <input type='text' name='priceP' value='$price[$x]' hidden>
                                    <button type='submit' name='ed'>EDIT</button>
                                </td>

                            </tr>
                            </form>
                            ";
                        }

                        ?>



                        </table>


                        <button type="button" style="margin-top:80px;margin-bottom: 30px;"><a
                                style="text-decoration: none; color: white;" href="orderLists.php">BACK</a></button>

                    </div>
                </div>

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