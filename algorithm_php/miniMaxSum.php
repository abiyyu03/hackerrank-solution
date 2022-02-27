<?php
$arr = [1,2,3,4,5];
$hasil = [];
for ($i=0; $i < count($arr); $i++) {  
    $var = $arr[$i];
    unset($arr[$i]); 
    array_push($hasil,array_sum($arr));
    array_push($arr,$var);
}
echo min($hasil)." ";
echo max($hasil);

// print_r(array_sum($arr));