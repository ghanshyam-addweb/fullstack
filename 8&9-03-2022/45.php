<?php


$numbers = array(1, 2, 3, 4, 5, 45, 15, 75);

function getMax($numbers)
{
   $n = count($numbers);
   $max = $numbers[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $numbers[$i])
           $max = $numbers[$i];
    return $max;      
}
 
function getMin($numbers)
{
   $n = count($numbers);
   $min = $numbers[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $numbers[$i])
           $min = $numbers[$i];
    return $min;      
}

echo "largest number is $max and smallest number is $min";


?>
