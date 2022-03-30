<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number'];
    $temp = $num;  
    $sum = 0;
    while($temp > 0)  
    {  
    $rem = $temp % 10;  
    $sum = $sum + ($rem * $rem * $rem);  
    $temp = (int)($temp / 10);  
    }if($num == $sum){
        echo "$num is Armstrong";
    }else {
        echo "$num is not Armstrong";
    }
}
?> 