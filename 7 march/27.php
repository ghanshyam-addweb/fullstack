<?php


$char = 'G';

echo "The Reverse case of the '" . $char . "' is: '";
if (ctype_lower($char))
	echo strtoupper($char) . "'\n";
else
	echo strtolower($char) . "'\n";

?>