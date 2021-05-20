<?php 
$newArray = [];
 // Open the file
        $filename='../data/userData.txt';
        $fp = @fopen($filename, 'r'); 
        // Add each line to an array
            if ($fp) {
            $array = explode("\n", fread($fp, filesize($filename)));
            $array=array_filter($array);
            $array = array_values($array); 
            $length=sizeof($array);
            $count=0;
            $emailarray=[];
            }
             for ($x = 0; $x < $length; $x++) {
        $ss= explode(":", $array[$x]);
        $ss=str_replace(' ','',$ss);
       if($ss[0]=="Email")
           { 
               $er=$ss[1];
               $emailarray[] = $er;
            
            }
            if($ss[0]=="FirstName")
           {
               $nr=$ss[1];
               $namearray[] = $nr;
            }
           

}
         
?>
<?php

if((isset($_POST["delete"]))){
    $lines = file('../data/userData.txt');
    $emaildel = $_POST['delete'];
    echo $emaildel;
    echo " here";
    foreach($lines as $key=>$value)
    {
        $content = file_get_contents('../data/userData.txt');
        
        $content = str_replace($emaildel, "",$content);
        // puts everything back to file after changes    
        file_put_contents('../data/userData.txt', $content);
          
     
        
    }    
}
?>

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

    <!--Icons from fontawesome website is implemented-->
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../CSS/backstoreUserAccounts.css" />
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
</head>

<body>

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

                    <li class="nav-item">
                        <a href="backstoreUserAccounts.php" class="nav-link">User List</a>
                    </li>

                    <li class="nav-item">
                        <a href="orderLists.php" class="nav-link">Order List</a>
                    </li>

                    <li class="nav-item">
                        <a href="loginpage2.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Admin</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
    <script type="text/javascript">
    
   

    

   function deleterow1(r){
       var i = r.parentNode.parentNode.rowIndex;
       document.getElementById("myTable").deleteRow(i);
       
    }
    
    function gotoedit(){
        location.href="editProfile.html"
    }

    
    
  function addrow(){
        var tbl = document.getElementById("myTable");
        var row = tbl.insertRow(1);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);

        cell0.innerHTML = "YYYYYYY";
        cell1.innerHTML = "123456";
        cell2.innerHTML = '<button type="button" onclick="gotoedit()" style="width: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;">Edit</button>';
        cell3.innerHTML = '<button type="button" onclick="deleterow1(this)" style="width: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;">Delete</button>';
    }
    
    <?php 
        
    ?>
    
    </script>

  
    <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 60px; margin-right:60px; margin-top:15px;">
        <h1 style="text-align:center; color: grey">List of Users</h1>
        <hr style="margin-bottom:4%">
        <table id="myTable" class="styled-table">
            
            <tr style="background: #e04362;">
                <th>User's Email</th>
                <th>User's Name</th>
                <th>
                    Edit
                </th>
                <th>Delete</th>

            </tr>
            <form method= "post">
            <div id="row1">
            <?php foreach($emailarray as $key=>$email){ ?>
            <tr>
                <td >
                  <?php
               
                echo $email;
                
                ?>
                </td>
                <td>
                    <?php
               
                echo $namearray[$key];
   
                  ?>
                </td>
                

                <td><button type="button" onclick="location.href='editProfile.php';" style="width: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;">Edit</button></td>
                <td><button type="button" onclick="deleterow1(this)" style="width: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;">Delete</button></td>
            
            </tr>
            
            <?php } ?>
            </form>
            </div>
              </table>
        <button type="button" role="submit" name="signup-submit" style="margin-left: 47%; margin-right: 60px; position: relative;"
            onclick="location.href='signuppageHF.php';">Add
            User</button>
        <button type="button" role="submit" name="signup-submit" style="margin-left: 45.75%   ; margin-right: 60px; position: relative;">Save
            Changes</button>
    </div>

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
