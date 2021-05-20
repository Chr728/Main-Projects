<?php 
include ("products.php");
function deleteI($itemName)
{
    $content= file_get_contents("../data/bCart.txt");
    $content=explode("\n",$content);
    $orderNumber=$content[0];
    $num= sizeof($content);

    $items=array();
    $price=array();
    $qty=array();

    for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$content[$x]);
     

     if($temp[0]==$itemName)
     {

     }

     else
     {
        array_push($items,$temp[0]);
        array_push($price,$temp[1]);
        array_push($qty,$temp[2]);
     }
 }

$info=array();
if(sizeof($items)!=0)
{
    array_push($info,"$orderNumber\n");
}

else
{
    array_push($info,"$orderNumber");
}
  for($x=0;$x<sizeof($items);$x++)
  {
      
      if($x<sizeof($items)-1)
      {
        array_push($info,"$items[$x],$price[$x],$qty[$x]\n");
      }

      else
      {
        array_push($info,"$items[$x],$price[$x],$qty[$x]");
      }

}

  $file=fopen("../data/bCart.txt","w");

    for($x=0; $x<sizeof($info);$x++)
    {   
        fwrite($file,$info[$x]);
    }
    
    fclose($file);
}

if(isset($_POST['deleItem']))
{
    deleteI($_POST['it']);
    header('location:order12345AC.php');
}

// -------------------
function addItem($itemName)
{
    if(alreadyInCart(itemName($itemName))==false)
    {
        if(itemExists($itemName))
        {
            $file=fopen("../data/bCart.txt","a");
            $pr=findPrice($itemName);
            $itemName=itemName($itemName);
            $productAdd="\n$itemName,$pr,1";
            fwrite($file,$productAdd);
            header('location:order12345AC.php');
        }

        else
        {

            echo "<script type='text/javascript'>
                        alert('INCORRECT ITEM NAME!');
                        window.location.href='order12345AC.php';
                </script>";
                
        }
    }

    else
    {
        echo "<script type='text/javascript'>
                    alert('ITEM ALREADY IN CART');
                    window.location.href='order12345AC.php';
             </script>";
    }
}

if(isset($_POST['add']))
{
    addItem($_POST['enter']);
}

function alreadyInCart($itemName)
{
    $content= file_get_contents("../data/bCart.txt");
    $content=explode("\n",$content);
    $orderNumber=$content[0];
    $num= sizeof($content);

    $items=array();
    $price=array();
    $qty=array();

    for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$content[$x]);
     
     if($temp[0]==$itemName)
     {
        return true;
     }
 }

 return false;
}


if(isset($_POST['ed']))
{
    $content= file_get_contents("../data/bCart.txt");
    $content=explode("\n",$content);
    $orderNumber=$content[0];

    $itemName=$_POST['itemI'];
    $qty=$_POST['qtyQ'];
    $pr=$_POST['priceP'];
    $img=findImg($itemName);

    echo"
    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>

        <title>Mom's Favourite Market</title>
        <link rel='shortcut icon' href='../Images/logo.png'>

        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
            integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>

        <script src='https://kit.fontawesome.com/9cec6e31d9.js' crossorigin='anonymous'></script>

        <link rel='stylesheet' href='../CSS/main.css'>
        <link rel='stylesheet' href='../CSS/cartStyle.css'>


    </head>

    <body>
        <header>
            <nav class='navbar navbar-expand-lg'>
                <a class='navbar-brand' href='successadmin.php'><img src='../Images/logo.png'><span id='title'>Mom's Favourite
                        Market (ADMIN)</span></a></a>
                <!--LINK TO MAIN PAGE-->
                <button class='navbar-toggler navbar-dark' type='button' data-toggle='collapse'
                    data-target='#main-navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse' id='main-navigation'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a href='ProductList.php' class='nav-link'>Product List</a>
                        </li>
                        <!--Each includes a link to the backend pages-->
                        <li class='nav-item'>
                            <a href='backstoreUserAccounts.php' class='nav-link'>User List</a>
                        </li>

                        <li class='nav-item'>
                            <a href='orderLists.php' class='nav-link'>Order List</a>
                        </li>

                        <li class='nav-item'>
                            <a href='loginpage2.php' class='nav-link'><i class='far fa-user-circle fa-lg'></i> Sign in</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>


        <button type='button'  style='float:right ; margin-right:5%;margin-top:3%;' style=' padding:10px;padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:80px; margin-bottom: 30px;' >
            <a style='text-decoration: none;color: white;font-size:16px;' href='#'>Save and Update </a>
        </button>

        <button type='button'  style=' margin-top:3%; margin-left:3%;' style='padding:10px;padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:80px; margin-bottom: 30px;' >
            <a style='text-decoration: none; color: white;font-size:16px;' href='order12345AC.php'>BACK </a>
        </button>

    

        <form method= 'POST' action='template.php' class='container' style='box-shadow: 0 0.8em 0.8em -0.4em; margin-top: 50px; padding-left: 30px; border-radius: 50px; padding-bottom: 20px; margin-bottom: 20px;'>
            <div class='row'>
                <div class='col-12'>
                    <h1 style='margin-top: 40px; color:#334754;'>Order #$orderNumber</h1>        
                    <!-- order Number -->

                    <div class='table-responsive'>
                        <div class='main'>
                            <table id='Table' class='table'>
                                <tr>
                    
                                    <th></th>
                                    <th style='color:#334754;  font-size: 22px;'>PRODUCT</th>
                                    <th style='color:#334754; font-size: 22px;'> QTY</th>
                                    <th style='color:#334754; font-size: 22px;'>PRICE</th>
                                    <th></th>
                                    <th></th>
                                </tr>


                                <tr>         
                                    <td>
                                        <div id='yes'>
                                            <img src=$img>
                                        </div> 
                                    </td>
                                

                                    <td  style='vertical-align: middle; color:#334754; font-size:20px;'>$itemName</td>
                                
                                    <td style='vertical-align: middle; color:#334754; font-size:20px; text-align:start;'>                   
                                            <button type='submit' name='addIt' style='margin-right:5px'><i  class='fas fa-plus-circle'></i></button>
                                            <input  type='text'  name='qtyIt' style='width:40px;border:none;' value=$qty>     
                                            <button type='submit' name='subIt' style='margin-right:10px'><i  class='fas fa-minus-circle'></i></button> 
                                    </td>
                                    
                                    <td style='vertical-align: middle; color:#334754; font-size:20px;'>$$pr</td>

                                    <td style='vertical-align: middle; font-size:17px;'>   
                                            <button type='submit'  name='del1' ><i class='far fa-times-circle'></i></button>
                                             <input  type='text'  name='remove' value='$itemName' hidden>  
                                    </td>                            
                                </tr>
                            </table>  
                            <h3  id='h'style='margin-top:10%; margin-left: 37%'><h3>          
                        </div>
                    </div>
                </div>
            </div>
        </form>";
        
    }

?>






                        
        <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
            integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n'
            crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
            integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
            crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
            integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
            crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js'
            integrity='sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0'
            crossorigin='anonymous'></script>




    </body>
    </html>
