<?php  
    $num=407;  
    $sum=0;  
    $temp = $num;  
    while($temp > 0)  
    {  
    $rem = $temp % 10;  
    $sum= $sum + $rem * $rem * $rem;  
    $temp = (int)($temp / 10);  
    }  
    if($num == $sum)  
    {  
    echo $num." is an Armstrong number";  
    }  
    else  
    {  
    echo $num."is not an armstrong number";  
    }  
?>  