<?php
$num = 60;
function local_var()
{
	$num = 50;
	echo "Variable num inside local_var() is $num \n";
}
local_var();
echo "<br>";
echo "Variable num outside local_var() is $num \n";


function global_var()
{
	global $num;
	echo "Variable num inside function global_var() : $num \n";
}
echo "<br>";
global_var();
echo "<br>";
echo "Variable num outside function global_var() : $num \n";
echo "<br>";

function static_var()
{
	static $num = 5;
	$sum = 2;
	$sum++;
	$num++;
	echo $num, "\n";
	echo $sum, "\n";
}

static_var();

static_var();

?>

