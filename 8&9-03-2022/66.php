<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number : <input type="number" name="number1"><br>


<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = (int)$_POST['number1'];


$temp = 1;
$rev = 0;
while ($temp > 0 && $temp < 100) {
    $rem = $temp % 10;
    $rev = $rev * 10 + $rem;
    $temp = (int)($temp/10);
}
while($rev == $number1){
    echo $number1." number is palindrome";
}
}
?>