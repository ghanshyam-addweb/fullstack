<?php

$x = 500;
$y = 43;
$z = 3550;

echo "x value is $x<br>";
echo "y value is $y<br>";
echo "z value is $z<br>";

if($x > $y && $x > $z ){
    if($y > $z){
    echo "The second largets number is ".$y;
    }
    else{
        echo "The second largets number is ".$z;
    }
}

else  if($y > $x && $y > $z){
    if($x > $z){
        echo "The second largets number is ".$x;
    }
    else{
        echo "The second largets number is ".$z;
    }
}
else if($z > $x && $z > $y){
    if($x > $y){
        echo "The second largets number is ".$x;
    }
    else{
        echo "The second largets number is ".$y;
    }
}
else{
    echo "all numbers are same";
}
?>
