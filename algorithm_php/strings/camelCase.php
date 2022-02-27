<?php

/*
 * Complete the 'camelcase' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function camelcase($s) {
    $result = 1;
    for ($i=0; $i < strlen($s); $i++) { 
    // function ord is to get ascii number
    // 65 - 90 is range the ascii number of the capital letters
        if(ord($s[$i]) >= 65 && ord($s[$i]) <= 90){
            $result++;
        }
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
