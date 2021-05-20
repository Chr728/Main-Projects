<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
$error = "";
$success = "";

if(isset($_POST['submit'])){
    if ($name=="admin" && $pass=="admin"){
        header("Location: successadmin.php");   
    }    
    else{
        $Message = urlencode("Invalid Credentials");
           header("Location: loginpage2.php?Message=$Message");
    }  
}

?>



</body>
    </html>