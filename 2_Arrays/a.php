<?php
//store the data into the variable name names.
$names = array(1=>"Marvin", 2=>"Marco",3=> "Marvin", 4=> "Marco", 5=> "Marco", 6=>"Marvin", 7=> "Christian");
//remove Christian from the array
unset($names[7]);
//Sort the data
sort($names);
//Take the unique in data
$result = array_unique($names);

//Ouput the data
echo implode($result);

?>