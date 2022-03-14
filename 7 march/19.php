<?php

$x = 50;
$y = 4350;
$z = 3550;

echo "x value is $x<br>";
echo "y value is $y<br>";
echo "z value is $z<br>";

if($x > $y && $x > $z ){
    if($y > $z){
    echo "The largest number is ".$x." and the smallest number is ".$z;
    }
    else{
        echo "The largest number is ".$x." and the smallest number is ".$y;
    }
}

else  if($y > $x && $y > $z){
    if($x > $z){
       echo "The largest number is ".$y." and the smallest number is ".$z;
    }
    else{
        echo "The largest number is ".$y." and the smallest number is ".$x;
    }
}
else if($z > $x && $z > $y){
    if($x > $y){
        echo "The largest number is ".$z." and the smallest number is ".$y;
    }
    else{
        echo "The largest number is ".$z." and the smallest number is ".$x;
    }
}
else{
    echo "all numbers are same";
}
?>
