<?php

$a=7;

switch ($a){
case 1:
case 2:
case 3:
case 4:
case 5:
    echo "Weekdays";
    break;
    case 6:
    case 7:
        echo "Weekends";
        break;
    default :
        echo "Wrong input";
        break;
}

