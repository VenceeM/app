<?php

function GetTheDifference(){

    
    $date1 = strtotime("2019-05-31");
    $date2 = strtotime("2018-04-05");

    $result = abs($date1 - $date2);
    $year = floor($result / (365*60*60*24));
    $months = floor(($result - $year * 365*60*60*24) / (30*60*60*24));
    $days = floor(($result - $year * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));

    printf("%d years, %d month, %d days", $year,$months,$days);


}

GetTheDifference();

?>