<?php

function Palindrome($word){

    //using strrev to reverse the word
    $rev = strrev($word);

    //check if the word is a palindrome or not
    if($word == $rev)
    {
        
        echo("$word is Palindrome");
    }
    else
    {
        echo("$word Not Palindrome");
    }
}


$stringInput = strtoupper("madam");
Palindrome($stringInput);


?>