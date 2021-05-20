<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

<?php
  // ob_start();
   //session_start();
?>
    <?php
    //    $array=[];
        
        if(isset($_POST['login'])){
 
        // Open the file
        $filename='../data/userData.txt';
        $fp = @fopen($filename, 'r'); 
        // Add each line to an array
            if ($fp) {
            $array = explode("\n", fread($fp, filesize($filename)));
            $array=array_filter($array);
            $array = array_values($array); 
            
          }


        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $error = "";
        $success = "";
        $passtf = false;
        $emailtf = false;
        $line = ";";
        $emailcomplete = "Email: ".$email."<br>";
        $passcomplete = "Password: ".$pass."<br>";
        
        $count=0;
        //echo $emailcomplete;
        //echo $passcomplete;
       $length=sizeof($array);

       for ($x = 0; $x < $length; $x++) {
        $ss= explode(":", $array[$x]);
        $ss=str_replace(' ','',$ss[1]);
        
        if($ss==$email)
           {
             $count++;
           }
           if($ss==$pass)
           {
             $count++;
           }
           if($count==2)
           {
            
             header("Location: success.php");

             break;
           }
           if($count<2)
           {
            $Message = urlencode("Invalid Credentials");
           header("Location: loginpage.php?Message=$Message");
           }
}
         
    }
    ?>
    </body>
    </html>