<?php  
$num = 2345;  
$temp = $num;
$rev = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$rev = ($rev * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of $temp is: $rev";  
?> 