<?php
include('backendCart.php');
    if(isset($_POST['del1']))
    {
        deleteI($_POST['remove']);
        header('location:order12345AC.php');
    }

    if(isset($_POST['addIt']))
    {
        add($_POST['remove']);
        header('location:order12345AC.php');
        
    }

    if(isset($_POST['subIt']))
    {
        subtract($_POST['remove']);
        header('location:order12345AC.php');
    }

    function add($itemName)
    {
            //Contents of the whole text file
        $content= file_get_contents("../data/bCart.txt")."<br/>";           //Saves As a String

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

        for($x=0; $x<sizeof($items);$x++)
        {
            if($itemName==$items[$x])
            {
               $qty[$x]+=1;
              
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
    
    function subtract($itemName)
    {
            //Contents of the whole text file
            $content= file_get_contents("../data/bCart.txt")."<br/>";           //Saves As a String

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
    
            for($x=0; $x<sizeof($items);$x++)
            {
                if($itemName==$items[$x])
                {           
                    $qty[$x]-=1;
                    if($qty[$x]==0)
                    {
                      unset($qty[$x]);
                      unset($items[$x]);
                      unset($price[$x]);

                      $qty=array_values($qty);
                      $items=array_values($items);
                      $price=array_values($price);

                    }
                  
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

    
?>