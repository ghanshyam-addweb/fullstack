<?php
$a = 14;
$b = 12;

// $operation = 'Add';
// $operation = 'Sub';
// $operation = 'Mul';
// $operation = 'Div';
$operation = 'Mod';


switch($operation){
    case 'Add' :
        $c = $a+$b;
        echo "Addition of $a and $b is $c";
        break;
    case 'Sub' :
        $c = $a-$b;
        echo "Subtraction of $a and $b is $c";
        break;
    case 'Mul' :
        $c = $a*$b;
        echo "Multiplication of $a and $b is $c";
        break;
    case 'Div' :
        $c = $a/$b;
        echo "Division of $a and $b is $c";
        break;
    case 'Mod' :
        $c = $a%$b;
        echo "Modulus of $a and $b is $c";
        break;
    default :
        echo "given opertaion is not valid";
        break;
}
?>