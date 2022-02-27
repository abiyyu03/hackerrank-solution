<?php
/**
 * 1. pecah array menjadi string
 * 2. pecah string
 * for
 */
// $arr = ['abc','ab','bd'];
// $j = 0;
// for ($i=1; $i < sizeof($arr); $i++) { 
//     // if()
// }
// echo stristr($arr[0],"a")."\n";
$arr = ['abc', 'bc', 'abc'];
$collection = [];

//Dynamic
foreach($arr as $ar) {
   $collection[] = $ar;
}

$result = call_user_func_array('array_intersect', $collection);

echo($result)."\n";