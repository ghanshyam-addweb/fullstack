<?php
$units = 150; 

if($units < 50){
    $rate = 100;
    echo "Billing amount is = ".$rate;
}
else if($units > 50 && $units < 100){
    $rate = $units * 1;
    echo "Billing amount is = ".$rate;
}
else if($units > 100 && $units < 200){
    $rate = $units * 1.50; 
    echo "Billing amount is = ".$rate;
}
else if($units > 200 && $units < 300){
    $rate = $units * 2;
    echo "Billing amount is = ".$rate;
}
else if($units > 300){
    $rate = $units * 2.50;
    echo "Billing amount is = ".$rate;
}
else{
    echo "enter valid number";
}
?>