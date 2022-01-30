<?php

/*
 * Complete the 'factorial' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function factorial($n) {
    if($n <= 1){
        return 1;
    } else {
        return $n * factorial($n-1);
    }
}

function result($n){
    factorial($n);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
