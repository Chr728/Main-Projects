<?php
include("test.php");
function combineItems()
{
    //Contents of the whole text file
    $content= file_get_contents("../data/cartOrder.txt")."<br/>";           //Saves As a String

    $data=explode("\n",$content);

    $num= sizeof($data);

    $items=array();
    $price=array();
    $qty=array();

    for($x=0; $x<$num;$x++)
    {
        $temp= explode(";",$data[$x]);
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


    $newSize=sizeof($items)+1;
    $madeChanges=false;
    $size=sizeof($items);

    for($x=0; $x<$size;$x++)
    {
        for($y=$x+1;$y<$size-1;$y++)
        {
            if($items[$x]==$items[$y])
            {
                 $combineQty=$qty[$x]+$qty[$y];
                 $qty[$x]=$combineQty;
                 unset($items[$y]);
                 unset($price[$y]);
                 unset($qty[$y]);
                 $newSize--;
                 $madeChanges=true;
            }
        }
    }

    if($madeChanges==true)
    {
        $file=fopen("../data/cartOrder.txt","w");

        for($x=0; $x<$newSize;$x++)
        {
            fwrite($file,"$items[$x];$price[$x];$qty[$x]\n");
        }

        fclose($file);
    }

}
?>