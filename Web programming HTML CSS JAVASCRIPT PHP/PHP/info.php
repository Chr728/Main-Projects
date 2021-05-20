<?php


if(isset($_POST['submit'])){

    $file="../data/userData.txt";
    $handle=fopen($file, 'a+');
    fwrite($handle, "First Name: ".$_POST['fname']."\n");
    fwrite($handle, "Last Name: ".$_POST['lname']."\n");
    fwrite($handle, "Email: ".$_POST['email_2']."\n");
    fwrite($handle, "Password: ".$_POST['password_2']."\n");
    fwrite($handle, "Province: ".$_POST['province']."\n");
    fwrite($handle, "City: ".$_POST['city']."\n");
    fwrite($handle, "Phone: ".$_POST['phone']."\n");
    fwrite($handle, "Address: \n" );
    if($_POST['sub1']=="false"){
        $bool=false;
        fwrite($handle, "Receive Deals: ".$bool."\n");
    }
    else{
        $bool=true;
        fwrite($handle, "Receive Deals: ".$bool."\n");
       
    }
    
    if($_POST['sub2']=="false"){
        $bool=false;
        fwrite($handle, "Newsletter: ".$bool."\n");
        
    }
    else{
        $bool=true;
        fwrite($handle, "Newsletter: ".$bool."\n");
        
    }
    fwrite($handle, "\n");
    echo ("done");
    // echo $_POST['sub1'];
    // echo $_POST['sub2'];
    }
    else{
        echo "not set";
    }
    
    fclose($handle);
?>