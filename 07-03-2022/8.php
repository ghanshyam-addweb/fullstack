<?php

$side1 = 15;
$side2 = 10;
$side3 = 13;

$perimeter = $side1 + $side2 + $side3;

$s = $perimeter / 2;

$area = sqrt($s * ($s-$side1) * ($s-$side2) * ($s-$side3));

echo "perimeter of tringle = ".$perimeter. " and area of tringle is ".$area;

?>