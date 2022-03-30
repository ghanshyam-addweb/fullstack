<?php  
$num = 10;
$n = 0;  
$num1 = 0;  
$num2 = 1;  
echo "Fibonacci series upto $num : ";   
echo "$num1, $num2";  
 
while ($n < $num )   
{  
  $num3 = $num1 + $num2;  
  echo ", ";
  echo "$num3";
  $num1 = $num2;  
  $num2 = $num3;  
  $n = $n + 1;
}
?> 