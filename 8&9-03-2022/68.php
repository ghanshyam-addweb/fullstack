<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number1"><br>
<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number1'];
    $sum=0;
    $rem=0;  
    for($i =0; $i<=strlen($num);$i++)
    {  
        $rem=$num%10; 
        $sum = $sum + $rem;  
        $num=$num/10;  
    }  
    echo "Sum of digits of number is $sum"; 
}
?>