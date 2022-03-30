<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number'];
    $temp = $num;  
    $rev = 0;
    while($temp > 0)  
    {  
    $rem = $temp % 10;  
    $rev = ($rev * 10)+ $rem;  
    $temp = (int)($temp / 10);  
    }  
    if($num == $rev){
        echo "$num is Palindrome";
    } 
    else {
        echo "$num is not palindrome";
    }
}
?>  