<?php

/*
* Complete the 'findDigits' function below.
*
* The function is expected to return an INTEGER.
* The function accepts INTEGER n as parameter.
*/

function findDigits($n) {
    $n_string = (string)$n;
    $result = 0;
    $length = strlen((string)$n);
    for($i = 0;$i<$length;$i++)
    {
        if(((int)$n_string[$i]) == 0){
            continue;
        } elseif($n % ((int)$n_string[$i]) == 0) {
            $result++;
        }
    }
    return $result;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));
    
    $result = findDigits($n);
    
    fwrite($fptr, $result . "\n");
}

fclose($fptr);
