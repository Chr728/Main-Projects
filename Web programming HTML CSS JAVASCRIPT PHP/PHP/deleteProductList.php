<?php 

function deleteProduct($itemName){

    $productList = file_get_contents("../data/newProdList.txt");
    $productList = explode("\n", $productList);
    $num = count($productList);

    foreach($productList as $key=>$value){
        echo " $key: $value <br />";
    }

    $name = array();
    $aisle = array();
    $subAisle = array();
    $price = array();
    $weeklyDeal = array();
    $weight = array();
    $pricePerWeight = array();
    $subdes1 = array();
    $subdes2 = array();
    $subdes3 = array();
    $productNum = array();
    $quantity = array();
    $image = array();

    for($i = 0; $i<$num ; $i++){

        $temp= explode(";",$productList[$i]);

        if($temp[0]==$itemName)
        {

        }
        else
        {
            array_push($name,$temp[0]);
            array_push($aisle,$temp[1]);
            array_push($subAisle,$temp[2]);
            array_push($price, $temp[3]);
            array_push($weeklyDeal, $temp[4]);
            array_push($weight, $temp[5]);
            array_push($pricePerWeight, $temp[6]);
            array_push($subdes1, $temp[7]);
            array_push($subdes2, $temp[8]);
            array_push($subdes3, $temp[9]);
            array_push($productNum, $temp[10]);
            array_push($quantity, $temp[11]);
            array_push($image, $temp[12]);
        }
        
     }

  $info = array();
     for($i = 0; $i<$num-1; $i++){
        if($i<$num-2)
        {
            array_push($info,"$name[$i];$aisle[$i];$subAisle[$i];$price[$i];$weeklyDeal[$i];$weight[$i];$pricePerWeight[$i];$subdes1[$i];$subdes2[$i];$subdes3[$i];$productNum[$i];$quantity[$i];$image[$i]\n");
        }
        else{
            array_push($info,"$name[$i];$aisle[$i];$subAisle[$i];$price[$i];$weeklyDeal[$i];$weight[$i];$pricePerWeight[$i];$subdes1[$i];$subdes2[$i];$subdes3[$i];$productNum[$i];$quantity[$i];$image[$i]");
        }
     }

    $file=fopen("../data/newProdList.txt","w");

    for($i=0; $i<$num;$i++)
    {   
        fwrite($file,$info[$i]);
    }
}
    if(isset($_POST['deleteP']))
    {
    deleteProduct($_POST['it']);
    header('location:productList.php');
    }

?>