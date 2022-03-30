<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Character: <input type="text" name="char" placeholder="Enter character for check ASCII value"><br>
<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $char = $_POST['char'];

   
    echo "ASCII value for entered char $char is $ascii";
}

?>