<?php

$sec = 65988;

$hour = floor($sec / 3600) ;
$sec1 = floor($sec - ($hour * 3600));

$min = floor($sec1 / 60);
// $sec2 = $sec - ($min * 60);
$seconds = floor($sec - ($hour * 3600) - ($min * 60));

echo "hour = ".$hour." minutes = ".$min. " and seconds = ".$seconds;

?>