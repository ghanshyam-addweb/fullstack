<?php


$numbers = array(1, 2, 3, 4, 5, 45, 15, 75);
$sortedarrray= array();
for($x=1; $x<=100; $x++) {
    if (in_array($x, $numbers)) {
        array_push($sortedarrray, $x);
    }
    echo "second largest number in array is ".$sortedarrray[sizeof($numbers)-2];
}
?>