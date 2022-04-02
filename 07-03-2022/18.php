<?php

function check($number){
    if($number % 2 == 0){
        echo "Number is Even"; 
    }
    else{
        echo "Number is Odd";
    }
}

$number = 27;
check($number)
?>