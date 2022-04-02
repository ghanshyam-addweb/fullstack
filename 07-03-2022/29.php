<?php
// PHP program to find largest among four
// numbers using ternary operator


// variable declaration
$n1 = 5; $n2 = 28; $n3 = 15; $n4 = 20;

// Largest among n1, n2, n3 and n4
$max = ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) ?
			$n1 : (($n2 > $n3 && $n2 > $n4) ?
			$n2 : ($n3 > $n4 ? $n3 : $n4));

// Print the largest number
echo "Largest number among ". $n1. ", ". $n2. ", ".
				$n3. " and ". $n4. " is " .$max;

$min = ($n1 < $n2 && $n1 < $n3 && $n1 < $n4) ?
        $n1 : (($n2 < $n3 && $n2 < $n4) ?
        $n2 : ($n3 < $n4 ? $n3 : $n4));

        echo "<br /> smallest number among ". $n1. ", ". $n2. ", ".
        $n3. " and ". $n4. " is " .$min;

        $secondlargest = ($n1 >= $n2 && $n1 >= $n3 && $n1 >= $n4) ? (($n2 >= $n3 && $n2 >= $n4) ? $n2 : $n3) : 
        ((b >= c) ? ((a >= c) ? a : c) : ((a >= b) ? a : b));

?>
