
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number 1: <input type="number" name="number1"><br>
Number 2: <input type="number" name="number2"><br>
<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = (int)$_POST['number1'];
    $number2 = (int)$_POST['number2'];
   $evensum = 0;
   $oddsum = 0;
   $i = (int)$_POST['number1'] + 1;
   

   while($i < (int)$_POST['number2']){
       if($i % 2 == 0){
           $evensum = $evensum + $i;
       }
       else{
           $oddsum = $oddsum + $i;
       }
       $i++;
      
   }
   echo "sum of even numbers between $number1 and $number2 is = $evensum <br />";
   echo "sum of odd numbers between $number1 and $number2 is = $oddsum";

}
?>