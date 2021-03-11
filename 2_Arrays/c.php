<?php
//I read the php documentation in array_unique
$colors = array("red" => "red", "blue" => "blue","black" => "black","red" => "red","blue" =>"blue","blue" =>"blue","red" =>"red","gold" => "gold");
$result = array_unique($colors);

echo implode(" ", $result);



?>