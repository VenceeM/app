<?php

function ReverseString($word)
{
    //store the input string into the reverse variable
    $reverse = strrev($word);

    echo($reverse);

}

ReverseString("Car");

?>