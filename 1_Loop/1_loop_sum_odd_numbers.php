<?php
function sum_all_odd_numbers()
{
    $num = 0;
    $total = 0;
    $isOdd = false;
    
    do{
        $num++;
        if($num % 2 != 0){
            $total = $total + $num;

        }

    
    }while($num <= 10);

    echo($total);
    

}
sum_all_odd_numbers();


?>