<?php
function sum_all_even_numbers()
{
    $nums =0;
    $total = 0;
    while($nums <= 10)
    {
        if($nums % 2 == 0 )
        {
            $total = $total + $nums;
        }
        $nums++;   
    }
    echo($total);

}

sum_all_even_numbers();

?>