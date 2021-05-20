<?php 

$content= file_get_contents("../data/milk.txt")."<br/>";           //Saves As a String

 //----------------------------------------------

 //Collect the information from the order
 $data=explode("\n",$content);

 $items=array();
 $price=array();
 $qty=array();

 array_push($items,$data[1]);
 array_push($qty,$data[2]);
 array_push($price,6.56);

 //Contents of the whole text file
 $content= file_get_contents("../data/bagel.txt")."<br/>";           //Saves As a String

 //----------------------------------------------

 //Collect the information from the order
 $data=explode("\n",$content);

 array_push($items,$data[1]);
 array_push($qty,$data[2]);
 array_push($price,4);



 $content= file_get_contents("../data/Strawberry.txt")."<br/>";           //Saves As a String

 //----------------------------------------------

 //Collect the information from the order
 $data=explode("\n",$content);

 array_push($items,$data[1]);
 array_push($qty,$data[2]);
 array_push($price,3);

include ("backHeader.php");
include ("backendCart.php");

function isEmpty($fileName)
{
    $content= file_get_contents($fileName);
    if($content=="")
    {
        return true;
    }

    else
    {
        return false;
    }
}

function del($fileName)
{
    $file=fopen($fileName,"w");
    fwrite($file,"");
    
}

?>



    <!--Main Section of the page-->
    <div class="container"
        style="box-shadow: 0 0.8em 0.8em -0.4em; margin-top: 50px; padding-left: 30px; border-radius: 50px; padding-bottom: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col">

                <h1 style="margin-top: 40px; color:#334754;">Order #12345AB</h1>

                <div class="table-responsive">
                    <div class="main">
                        <table class="table" id="ed">
                             
                        <?php
                            echo"
                                <tr>
                                    <td colspan='6'>
                                        <form action='...' method='POST' style='float: right; margin-top:20px;'>
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
                            if(!isEmpty("../data/milk.txt"))
                            {
                                echo
                                "
                                <form method='POST'>
                                <tr>
                                    <td> <img src=../Images/milk.jpg></td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$items[0]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$qty[0]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$$price[0]</td>
                                    <td style='vertical-align: middle; font-size:17px;'>
                                            <input type='text' name='it' value='$items[0]' hidden>
                                            <button type='submit' name='dele1' ><i class='far fa-times-circle'></i></button>

                                    </td>
                                    <td style='vertical-align: middle;  font-size:17px;'><a href='ordermilk.php'
                                        class='editButton'><button type='button'>EDIT</button></a>
                                    </td>

                                </tr>
                                </form>";

                                if(isset($_POST['dele1']))
                                {
                                    del('../data/milk.txt');
                                    header('location:order4013.php');
                                }
                            }

                            if(!isEmpty("../data/bagel.txt"))
                            {
                                echo
                                "
                                <form method='POST'>
                                <tr>
                                    <td> <img src=../Images/bagel.jpg></td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$items[1]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$qty[1]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$$price[1]</td>
                                    <td style='vertical-align: middle; font-size:17px;'>
                                            <input type='text' name='it' value='$items[1]' hidden>
                                            <button type='submit' name='dele2'><i class='far fa-times-circle'></i></button>
        
                                    </td>
                                    <td style='vertical-align: middle;  font-size:17px;'><a href='orderbagel.php'
                                        class='editButton'><button type='button'>EDIT</button></a>
                                    </td>

                                </tr>
                                </form>";

                                if(isset($_POST['dele2']))
                                {
                                    del('../data/bagel.txt');
                                    header('location:order4013.php');
                                }
                            }

                            if(!isEmpty("../data/Strawberry.txt"))
                            {
                                echo
                                "
                                <form method='POST'>
                                <tr>
                                    <td> <img src=../Images/strawberry.jpg></td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$items[2]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$qty[2]</td>
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$$price[2]</td>
                                    <td style='vertical-align: middle; font-size:17px;'>
                                            <input type='text' name='it' value='$items[2]' hidden>
                                            <button type='submit' name='dele3'><i class='far fa-times-circle'></i></button>
        
                                    </td>
                                    <td style='vertical-align: middle;  font-size:17px;'><a href='orderstrawberry.php'
                                        class='editButton'><button type='button'>EDIT</button></a>
                                    </td>

                                </tr>
                                </form>";

                                if(isset($_POST['dele3']))
                                {
                                    del('../data/Strawberry.txt');
                                    header('location:order4013.php');
                                }
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