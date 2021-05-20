<?php

$productList = file_get_contents("../data/newProdList.txt")."</br>";

    $products = explode("\n", $productList);

    $num = count($products);

    $item = array();
    $aisle = array();
    $subAisle = array();
    $weeklyDeal = array();

    for($i = 0 ; $i<$num ; $i++){
        $temp = explode(";", $products[$i]);

        array_push($item, $temp[0]);
        array_push($aisle, $temp[1]);
        array_push($subAisle, $temp[2]);
        array_push($weeklyDeal, $temp[4]);
    } 


    $FV = array(); 
    $frozen = array();
    $bakery = array();
    $butchery = array();
    $dairy = array();
    $pantry = array();

    for($i = 0; $i<$num; $i++){
        if($aisle[$i] == "Fruits & Vegetables")
            array_push($FV, $products[$i]);
        else if($aisle[$i] == "Frozen")
            array_push($frozen, $products[$i]);
        else if($aisle[$i] == "Bakery")
            array_push($bakery, $products[$i]);
        else if($aisle[$i] == "Butchery")
            array_push($butchery, $products[$i]);
        else if($aisle[$i] == "Dairy & Eggs")
            array_push($dairy, $products[$i]);
        else if($aisle[$i] == "Pantry")
            array_push($pantry, $products[$i]);
    }

//See if it's in the weekly deal
$sales = array();
$noSales = array();
    
for($i = 0; $i<$num-1; $i++){
    if($weeklyDeal[$i] == "no deal"){
        array_push($noSales, $products[$i]);
        }
    else{
        array_push($sales, $products[$i]);
        }
                
}

?>
