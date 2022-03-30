<?php
// $num1 = 100;
// $num2 = 200;
$i = 0;
$sum = 0;

for($num1 = 101; $num1 < 200; $num1++){
    if($num1 % 7 == 0){
        
        $sum = $sum + $num1;
        // $num1 = $num1 + 1;
        $i++;
    }

}

echo "Total number divisible by 7 between 100 and 200 is $i and Sum of that numbers is = $sum";


?>

