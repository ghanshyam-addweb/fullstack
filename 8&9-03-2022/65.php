
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number1"><br>

<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = (int)$_POST['number1'];
    echo "prime numbers up to $number1 are ";

    for($num = 1 ; $num <= $number1; $num++){
      $count = 0;
      for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
          $count++;
          break;
        }
      }
      if($count == 0 && $num != 1){
        echo $num;
        echo ",";
      }
      
    } 
}

  

?>