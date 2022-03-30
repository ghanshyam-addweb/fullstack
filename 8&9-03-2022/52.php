<?php
// $num = 4;
// $num = 24;
$num = 216;
$root = 1;
$i = 0;

while(1){
    $i = $i + 1;
    $root = ($num / $root + $root ) / 2;
    if($i == $num + 1){
        break;
    }
}
// $root = (int)($root);
echo $root;
?>