<?php

$a = 10;
$b = 12;
$c = 9;

$D = ($b * $b )- (4 * $a * $c);

if($D > 0 ){
    $x = ( -$b + sqrt($D)) / (2 * $a);
    $y = ( -$b - sqrt($D)) / (2 * $a);
    echo "roots are = ".$x ." and ". $y;
}
else{
    $x = ( -$b ) / (2 * $a);
    $y = (sqrt(-$D)) / (2 * $a);
    echo "roots are = ".$x ." and ". $y;
}

?>