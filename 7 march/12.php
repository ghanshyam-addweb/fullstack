<?php

$basicsalary = 20000;

$DA = 0.05 * $basicsalary;
echo "DA = ".$DA;
echo "<br />";
$HRA = 0.25 * $basicsalary;
echo "HRA = ".$HRA;
echo "<br />";
$pf = 0.02 * $basicsalary;
echo "PF = ".$pf;
echo "<br />";
$medicle = 0.03 * $basicsalary;
echo "medicle = ".$medicle;
echo "<br />";

$finalsalary = ($basicsalary + $DA + $HRA) - ($pf + $medicle);

echo "final salary after adding DA, HRA and subtract pf and medicle is = ".$finalsalary;
?>