<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number 1: <input type="number" name="number1"><br><br>
Number 2: <input type="number" name="number2"><br><br>
Number 3: <input type="number" name="number3"><br><br>
Number 4: <input type="number" name="number4"><br><br>
Number 5: <input type="number" name="number5"><br><br>
Number 6: <input type="number" name="number6"><br><br>
Number 7: <input type="number" name="number7"><br><br>
Number 8: <input type="number" name="number8"><br><br>
Number 9: <input type="number" name="number9"><br><br>
Number 10: <input type="number" name="number10"><br><br>

<input type="submit" >
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$age = [(int)$_POST['number1'],(int)$_POST['number2'],(int)$_POST['number3'],(int)$_POST['number4'],(int)$_POST['number5'],(int)$_POST['number6'],(int)$_POST['number7'],(int)$_POST['number8'],(int)$_POST['number9'],(int)$_POST['number10']];
$count = 0;

foreach($age as $x){
    if($x > 50 && $x < 60){
      $count++;
    }
}echo "Number of persons between age group of 50 and 60 is $count";
}
?>
    