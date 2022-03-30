
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number 1: <input type="number" name="number1"><br>
Number 2: <input type="number" name="number2"><br>
<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = (int)$_POST['number1'];
    $number2 = (int)$_POST['number2'];
    $sum=0;  
    $temp = $number1;  
    while($temp > $number1 && $temp < $number2)  
    {  
    $rem = $temp % 10;  
    $sum= $sum + $rem * $rem * $rem;  
    $temp = (int)($temp / 10);  
    if($number1 == $sum)  
    {  
    echo $number1." is an Armstrong number";  
    }  
    else  
    {  
    echo $number1."is not an armstrong number";  
    }  
    }
}

?>