<?php
/*
Exercise 3: Palindrome check
Create a PHP script that checks if a given number is a palindrome. 
A palindrome is a number that remains the same when its digits are reversed.
Use loops to accomplish this task.
*/
function findtheamountofpalindromesbetween($first,$second){
    $higher = 0;
    $lower = 0;
    if ($first > $second) {
        $higher = $first;
        $lower = $second;
        # code...
    }
    if ($first < $second) {
        $higher = $second;
        $lower = $first;
        # code...
    }
    while ($higher >= $lower ) {
        --$higher;
        $reversed = strrev($higher);
        if ($reversed == $higher) {
            echo "<br>".$higher." is a Palindrome";
            # code...
        }
        # code...
    }
}
findtheamountofpalindromesbetween(367,7800000);
?>