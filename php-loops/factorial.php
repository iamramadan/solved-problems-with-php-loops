<?php
/*
 Exercise 2: Factorial Calculation 
Develop a PHP  that calculates the factorial of a given number using loops (either for or while ). The factorial of a number is the product of all positive integers less than or equal to that number. For example, the factorial of 5 (denoted as 5!) is 5 x 4 x 3 x 2 x 1.
*/
function factorial($number){
    $iterator = 1;
    $x = 0;
    for ($fcnum=$number; $fcnum > 0 ; --$fcnum) { 
        $x = $iterator * $fcnum;
        $iterator = $x;
        if ($fcnum == 1) {
            echo "The factorial is  ".$iterator."<br>";
        }
    }
}
function factorial2($strinG){
    echo $strinG."<br>";
    $iterator = 1;
    $x = 0;
    $y = 0;
    for ($fcnum=strlen($strinG); $fcnum > 0 ; --$fcnum) { 
        $x = $iterator * $fcnum;
        $iterator = $x;
        if ($fcnum == 1) {
            $y = $iterator;
            $shuffle = 0;
            for ($i=0; $i < $y ; $i++) {
                $test = $shuffle; 
                $shuffle = str_shuffle($strinG);
                $test2 = $shuffle;
                if ($shuffle != $test && $test != $test2) {
                    # code...
                    echo"$shuffle<br>";
                }
            }
        }
    }
}



factorial(13);
factorial2("spat");

?>