<?php

// $char = 'A';
$char = 'c';

switch($char){
    case 'a' :
    case 'A' :
    case 'e' :
    case 'E' :
    case 'i' :
    case 'I' :
    case 'o' :
    case 'O' :
    case 'u' :
    case 'U' :
        echo "$char is Vowel";
        break;
    default :
        echo "$char is Consonant";
}
?>