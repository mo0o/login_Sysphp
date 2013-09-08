<?php


// function to generate and print all N! permutations of $str. (N = strlen($str)).

function permute($str,$i,$n) {


   if ($i == $n) {

    $expression = '(((((9'.$str[0].'7)'.$str[1].'3)'.$str[2].'9)'.$str[3].'3)'.$str[4].'7)';

    eval('$result = '.$expression.';');
    

    if ($result == 6) {
                                        echo " ".$expression." = ".$result."</br>";
                                    } 
    }
    else {
        for ($j = $i; $j < $n; $j++) {
            swap($str,$i,$j);
            permute($str, $i+1, $n);
            swap($str,$i,$j); // backtrack.
        }
    }
}

//______________________________________________________________________________________________

// function to swap the char at pos $i and $j of $str.

function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}   

$str = "++-*/";
permute($str,0,strlen($str)); // call the function.

?>