<?php

    $n = 17;
	$binaryNum;
	$i = 0;
	while ($n > 0)
	{
		$binaryNum[$i] = $n % 2;
		$n = (int)($n / 2);
		$i++;
	}
	for ($j = $i - 1; $j >= 0; $j--){
        echo $binaryNum[$j];
    }
	
?>
