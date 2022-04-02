<?php


$principal = 8000;
$years = 4;
$rate = 10;

$simple = ($principal * $years * $rate)/100;

$amount = $principal * pow((1+ $rate / 100) , $years);
$compound = $amount - $principal;
echo "Simple Interest = ".$simple;
echo "<br>";
echo "Compound Interest = ".$compound;
?>