<?php

$days = 33;

$month = floor($days / 30);
$days = floor($days - ($month * 30));
// $day = $days;

echo "months = ".$month." days = ".$days;
?>