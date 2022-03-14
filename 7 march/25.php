<?php

// $input = 45;
$input = "A";
// $input = "%";

        if (($input >= "A" && $input <= "Z")|| ($input >= "a" && $input <= "z"))
            echo $input." is Alphabet.";
        else if ($input >= "0" && $input <= "9999999999")
	        echo $input." is Digit.";
    	else								
	        echo $input." is Special Character ";

?> 
