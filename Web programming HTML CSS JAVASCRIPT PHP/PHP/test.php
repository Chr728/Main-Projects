<?php
session_start();

function delItem($itemName)
{
    $file = fopen("../data/cartOrder.txt", "r");
    $format="";
    $storage=array();
    
        if($file)
        {


            while(($line = fgets($file)) !== false)
            {
                $values = explode(";", $line);
               

                if($itemName==$values[0])
                {}

                else
                {
                    $format="$values[0];$values[1];$values[2]";
                    array_push($storage,$format);
                }
            }


            fclose($file);
            $file=fopen("../data/cartOrder.txt","w");

            for($x=0; $x<sizeof($storage);$x++)
            {   
                 fwrite($file,($storage[$x]));
            }

        }
        
        else
        {
            echo "The file doesn't exist!";
        }
}

function add($itemName)
{
    $file = fopen("../data/cartOrder.txt", "r");
    $format="";
    $storage=array();
    
        if($file)
        {


            while(($line = fgets($file)) !== false)
            {
                $values = explode(";", $line);
               

                if($itemName==$values[0])
                {
                    $values[2]+=1;
                    $format="$values[0];$values[1];$values[2]\n";
                    array_push($storage,$format);
                }

                else
                {
                    $format="$values[0];$values[1];$values[2]";
                    array_push($storage,$format);
                }
            }


            fclose($file);
            $file=fopen("../data/cartOrder.txt","w");

            for($x=0; $x<sizeof($storage);$x++)
            {   
                 fwrite($file,($storage[$x]));
            }

        }
        
        else
        {
            echo "The file doesn't exist!";
        }
}

function subtract($itemName)
{
    $file = fopen("../data/cartOrder.txt", "r");
    $format="";
    $storage=array();
    
        if($file)
        {


            while(($line = fgets($file)) !== false)
            {
                $values = explode(";", $line);
               

                if($itemName==$values[0])
                {
                    if($values[2]>1)
                    {
                        $values[2]-=1;
                        $format="$values[0];$values[1];$values[2]\n";
                        array_push($storage,$format);
                    }
                }

                else
                {
                    $format="$values[0];$values[1];$values[2]";
                    array_push($storage,$format);
                }
            }


            fclose($file);
            $file=fopen("../data/cartOrder.txt","w");

            for($x=0; $x<sizeof($storage);$x++)
            {   
                 fwrite($file,($storage[$x]));
            }

        }
        
        else
        {
            echo "The file doesn't exist!";
        }
}

function emptyCart()
{
    $file=fopen("../data/cartOrder.txt","w"); 
    fwrite($file,"");
  
    session_unset();
    session_destroy();
}


if(isset($_POST['add']))
{
    add($_POST['it']);
    header('location:Cart.php');
}

if(isset($_POST['sub']))
{
    subtract($_POST['it']);
    header('location:Cart.php');
}

if(isset($_POST['d']))
{
    delItem($_POST['it']);
    header('location:Cart.php');
}

if(isset($_POST['delAll']))
{
    emptyCart();
    header('location:Cart.php');
}

?>