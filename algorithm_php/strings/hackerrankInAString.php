<?php

/*
 * Complete the 'hackerrankInString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function hackerrankInString($s) {
    $str = 'hackerrank';
    $j = 0;
    for($i = 0;$i < strlen($s);$i++){
        if($j < strlen($str) && $s[$i] == $str[$j]){
            $j+=1;
        }
    }
    return ($j == strlen($str)) ? 'YES' : 'NO';

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = hackerrankInString($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
