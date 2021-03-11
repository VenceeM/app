<?php

function Square($x)
{
    //check if its a square
    $y = (int)(sqrt($x));
    return ($y * $y == $x);
}
function Fibonacci($num)
{

    return Square(5 * $num * $num + 4) ||
    Square(5 * $num * $num - 4);
}

for($x = 1; $x <= 10; $x++)
{
    if(Fibonacci($x))
    {
        echo nl2br("$x is a Fibonacci Number \n" );
    }
    else{
        echo nl2br("$x is a not Fibonacci Number \n");
    }
}


?>