<?php
$i = 20;
$j = 23;
$k = 6;
$result = 0;

for ($h=$i; $h <= $j; $h++) { 
    $convert_string = (string)$h;
    $reverse_string = strrev($convert_string);
    $reverse_h = (int)$reverse_string;
    if(!is_float(($h - $reverse_h) / $k))
    {
        $result++;
    }
    
}
echo $result;


// for ($l=1; $l >= 0; $l--) { 
//     $reverse_string = substr($convert_string,$l,1);
// } 