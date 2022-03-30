<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number"><br>
<input type="submit" >
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = (int)$_POST['number'];

$count = 0;

for($i = 2; $i <= $num; $i++)
{
 if($num % $i == 0){
    $count++;
    echo $count;
 }}
  
// if($count == 1){
//  echo "$num is a prime number";
// }
// else{
//  echo "$num is not a prime number";
// }


}

?>