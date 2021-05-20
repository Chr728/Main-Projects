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
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    <!--The beginning of javascript file-->

    <script type="text/javascript" >


        // function "up" here represents the function of update once all the modifications are done  it sends an alert to the user to mention that every new change in saved now
        // it sends an email to the user to confirm.
    function up()
        {
            alert("New modifcations were inserted and updates were saved successfully. You will receive a confirmation email.")
            Email.send({
            // client.UseDefaultCredentials = true;
                Host : "smtp.gmail.com",
               
                Username : " 	yeskhentatsa12.17.schizophrenia@gmail.com ",
                Password : "  yeskhentatsa12345 ",
                To : "  xavierkmt@gmail.com ",
                //  To : "  yeskhentatsa12.17.schizophrenia@gmail.com ",
                From : "  yeskhentatsa12.17.schizophrenia@gmail.com  ",
                Subject : "Confirmation: (Mom's Favorite Market) ONLINE ORDER  UPDATED SUCCESSFULY ! ",
                Body : "Dear Customer, <br><br>  This email is to confirm that a new modification has been added to   your online order  at Mom's Favourite Market. <br><br>If you have any questions regarding your online order please don't hestate to contact us. <br><br>Sincerely, <br> <br> 514-848-2424. <br>Mom's Favorite Market Customer Service Team."
            }).then(
            message => alert(message)
            ).catch(err => { console.log(err) });



        }
    
    </script>
   
</head>

<body>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="successadmin.php"><img src="../Images/logo.png"><span id="title">Mom's Favourite
                    Market (ADMIN)</span></a></a>
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
                     <!--Each includes a link to the backend pages-->
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

<button type="button"  style="float:right ; margin-right:5%;margin-top:3%;" style=" padding:10px;padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:80px; margin-bottom: 30px;"  onclick="up()"><a
            style="text-decoration: none;color: white;font-size:16px;" href="#">Save and Update </a></button>

    <button type="button"  style=" margin-top:3%; margin-left:3%;" style=" padding:10px;padding-bottom:1mm; padding-left:1mm; ;padding-right:1mm;padding-top:0mm;margin-top:80px; margin-bottom: 30px;" ><a
                                        style="text-decoration: none;
                                        color: white;font-size:16px;" href="order4013.php">BACK </a></button>

   
   
<?php
// opens the file to read that order details info    
$file = fopen('../data/bagel.txt', "r+");
$ordernumber= fgets($file);
 $itemname= fgets($file);
 static $quantity;
  $quantity=(int)fgets($file);
// if the user clicks + button it increases the quantity of the item                
  if((isset($_POST['add'])) && ($quantity<30)  ){

        $content = file_get_contents('../data/bagel.txt');
        $content = str_replace($quantity,$quantity+1,$content);
        $quantity= $quantity+1;
            file_put_contents('../data/bagel.txt', $content);

}  
// if the user clicks mines button it decreaese the quantity of the item .
            if((isset($_POST['re']))  && ($quantity>1) )
            {
                $content = file_get_contents('../data/bagel.txt');  
                $content = str_replace($quantity,$quantity-1,$content);
               
                $quantity= $quantity-1;
                     file_put_contents('../data/bagel.txt', $content);

            }
// if user clicks on delete then it deletes that specific item 
 if((isset($_POST['del']))){

    $lines = file('../data/bagel.txt');
  
    $search =$ordernumber;
    foreach($lines as $key=>$value)
    {
        // reads the file  gets all the info and deletes them.
        $next= $key;
        $itemname= $lines[$next+1];
        $quantity= $lines[$next+2];
        $content = file_get_contents('../data/bagel.txt');
        $content = str_replace($search, '',$content);$content = str_replace( $itemname, '',$content);
        $content = str_replace($quantity, '',$content);
           // puts everything back to file after changes 
            file_put_contents('../data/bagel.txt', $content);
        // if there is an empty line stop
         if($line === "\n"){
               exit();
         }
     
        
    }

exit();
}
 // if delete button is not clicked and the item is not empty then you can print it 
if((!(isset($_POST['del']))) && (!((empty($orderumber))  && (empty($itemname))  && (empty($quantity)))  ) && ($line !=="\n")    )  {


print('
<form   class="container"  method= "POST"
style="box-shadow: 0 0.8em 0.8em -0.4em; margin-top: 50px; padding-left: 30px; border-radius: 50px; padding-bottom: 20px; margin-bottom: 20px;">
<div class="row">
<div class="col-12">

    <h1 style="margin-top: 40px; color:#334754;">Order #12345AB</h1>

    <div class="table-responsive">
        <div class="main">
            <table id="Table" class="table">
                <tr>
            <!--it has the quantity and all parts of related to that specific item-->     
                    <th></th>
                    <th style="color:#334754;  font-size: 22px;">PRODUCT</th>
                    <th style="color:#334754; font-size: 22px;"> QTY</th>
                    <th style="color:#334754; font-size: 22px;">PRICE</th>
                    <th></th>
                    <th></th>
                </tr>


                <tr>
                   
                    <td>
                   <div id="yes">
                    <img src="../Images/bagel.jpg"></div> </td>
                   
                    <td  id="part" name="item"  style="vertical-align: middle; color:#334754; font-size:20px;"> 
                    '.$itemname.'
                    </td>
                 
                    <td  id= "part1" style="vertical-align: middle; color:#334754; font-size:20px; text-align:start;">
                        <button type="submit"  id= "part2"type="button"  id="plus" name="add"><i  class="fas fa-plus-circle"></i>
                      
                       
                       </button>'.$quantity.' 
                      
                        <input   type="text"   name="number" id= "num"   size=1.9% width="3px" style="border:none; text-align:start;">
                        
                       <!--Includes the parts of the function where the plus button adds the quantity, the minues button decreases it -->
                      
                    <button     type="submit"  style="margin-left: -13.5%; " id="minus" name="re"  ><i  class="fas fa-minus-circle">  </i>   </button> 
                    </td>
                    
                    <td  id= "part4"style="vertical-align: middle; color:#334754; font-size:20px;">$4</td>
                     <!--Delete button deltes the item completely -->
                    <td   id= "part5"  style="vertical-align: middle; font-size:17px;"><button type="submit"  name="del" ><i class=" far
                            fa-times-circle"></i></button></td>
                    

                        
                    
                </tr>
                    

            </table>
             <!--Shows the quantity available in the stock-->
            <h3  id="h"style="margin-top:10%; margin-left: 37%">30 available in stock<h3>
            

                   
        </div>
    </div>

</div>
</div>
                </form>'); 
                

          
} 

?>


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