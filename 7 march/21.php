<?php
$number = 1001;
$temp = $number;
$rev = 0;
while ($temp > 0) {
    $rem = $temp % 10;
    $rev = $rev * 10 + $rem;
    $temp = (int)($temp/10);
}

if ($rev == $number){
    echo $number." number is palindrome";
}
else{
    echo $number." number is not palindrome";
}

?>
