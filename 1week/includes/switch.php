<?php

// Swithc Statement in php 
$days = 5;


switch($days){
    case 0:
        echo "Sunday";
        break;
    case 1: 
        echo "Monday";
        break;
    case 2: 
        echo "Tuestday";
        break;
    case 3: 
        echo "Wednesday";
        break;
    case 4: 
        echo "Thusday";
        break;
    case 5: 
        echo "Friday";
        break;
    case 6: 
        echo "Saturday";
        break;
    default: 
    echo "Not valide date";

}

?>