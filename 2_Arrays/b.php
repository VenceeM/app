<?php

//data
$data = array(9863,7127,2020,80,131,55,100);
//i sort it first before  manipulation the data
sort($data);


for($x = 0; $x < count($data); $x++)
{
    //get the round and store it also to the data
    $data[$x] = round($data[$x], -1);
    
    //print the final result
    echo("$data[$x] \n");
}


?>