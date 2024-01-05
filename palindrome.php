<?php
function findtheamountofpalindromesbetween($x){

   $var = count($x);
   for ($i=0; $i < $var ; ++$i) { 
    # code...
    $collectString = $x[$i];
    $pallindrome = strrev($collectString);
    if ($collectString == $pallindrome) {
        # code...
        echo "$collectString is a pallindrome".'<br>';
        echo $collectString."||".$pallindrome.'<br>';
    }
   }
}

findtheamountofpalindromesbetween(array("fat","tat","pup"));
?>