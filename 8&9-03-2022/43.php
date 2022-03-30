<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = (int)$_POST['number'];
for($i = 1; $i <= $n; $i++){
    if($i%2==0){
        echo "0";
        echo ",";
    }
    else {
        echo "1";
        echo ",";
    }
}
}
?>