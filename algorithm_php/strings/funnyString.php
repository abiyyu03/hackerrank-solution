<?php

/*
 * Complete the 'funnyString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function funnyString($s) {
    
$str_original = [];
$str_reverse = [];
$j = 0;
$k = 0;
for ($i=strlen($s); $i > 0; $i--) { 
    $str_reverse[] = ord($s[$i-1]);
}

for ($i=0; $i < strlen($s); $i++) { 
    $str_original[] = ord($s[$i]);
}

for ($i=1; $i < strlen($s); $i++) { 
    $str_ori[] = abs($str_original[$i]-$str_original[$i-1]);
    $str_rev[] = abs($str_reverse[$i]-$str_reverse[$i-1]);
    
    if($str_ori[$j] == $str_rev[$j]) 
    {
        $k+=1;
    }
    $j+=1;
}
return (sizeof($str_rev) == $k) ? 'Funny' : 'Not Funny';

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = funnyString($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
