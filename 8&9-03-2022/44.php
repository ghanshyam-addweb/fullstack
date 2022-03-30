<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number']; 
    $factorial = 1;  
    for ($i=$num; $i>=1; $i--)   
    {  
      $factorial = $factorial * $i;  
    }  
    echo "Factorial of $num is $factorial";  
  }
?>  