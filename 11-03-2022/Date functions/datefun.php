<title>PHP Date functons</title>

<?php
echo "<label> PHP Date Functions<br><br></label>";
print_r(getdate());
echo "<br><br>";
print_r(gettimeofday());
echo "<br><br>";
echo gmdate("l jS \of F Y h:i:s A"); 
echo "<br><br>";
print_r(localtime());
?>