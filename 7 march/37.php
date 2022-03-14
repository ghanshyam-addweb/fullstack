<?php

$day = 1;
// $day = 7;
// $day = 10;



switch($day){
    case 1 :
        echo "$day  is Monday";
        break;
    case 2 :
        echo "$day is Tuesday";
        break;
    case 3 :
        echo "$day is Wednesday";
        break;
    case 4 :
        echo "$day is Thursday";
        break;
    case 5 :
        echo "$day is Friday";
        break;
    case 6 :
        echo "$day is Saturday";
        break;
    case 7 :
        echo "$day is Sunday";
        break;
    default:
        echo "Enter valid day";
        break;
}
?>