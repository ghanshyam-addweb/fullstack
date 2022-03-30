<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number1"><br>

<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number1']; 
    $sum=0;  
    $temp = $num;  
    $rev = 0;
    while($temp > 0)  
    {  
    $rem = $temp % 10;  
    $rev = ($rev * 10)+ $rem;
    $sum= $sum + $rem ;  
    $temp = (int)($temp / 10);  
    }  
    echo $num."'s reverse number is $rev and Sum is $sum";  
}
?>  