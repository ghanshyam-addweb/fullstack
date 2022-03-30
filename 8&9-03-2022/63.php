<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number 1: <input type="number" name="number1"><br><br>
Number 2: <input type="number" name="number2"><br><br>
  <input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = (int)$_POST['number1'];
    $num2 = (int)$_POST['number2'];

    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
      }
      
      for($i = 1; $i <= $num1; $i++) {
        if ($num1 % $i == 0 and $num2 % $i == 0)
          $gcd = $i;
      }
      
      echo "GCD of $num1 and $num2 is: $gcd";
    }
?>