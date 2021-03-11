
<?php

function fibonacci_sequence($fib){

    if($fib == 0){
        return 0;
    }
    else if($fib == 1){
        return 1;
    }

    else{
        return(fibonacci_sequence($fib-1) + fibonacci_sequence($fib-2));
    }
}
$nums = 10;
for($x = 0; $x < $nums; $x++)
{
    echo(fibonacci_sequence($x));
}

?>