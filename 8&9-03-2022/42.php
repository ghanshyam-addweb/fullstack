<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = (int)$_POST['number'];
for($i = 1; $i <= $number; $i++){
    
    echo $i.",";
    $i += 2;
}
}
?>