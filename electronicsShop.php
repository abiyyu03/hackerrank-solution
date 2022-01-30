<?php
$b = 10;
$keyboards = [3,1];
$drives = [5,2,8];


// good solution
$b = 10;
$keyboards = [3,1];
$drives = [5,2,8];
$result = -1;
for ($i=0; $i < count($n); $i++) { 
    if ($n[$i] < $b) {
        for ($j=0; $j < count($m); $j++) {
            $canpaid = $n[$i] + $m[$j];
            if ($canpaid <= $b && $canpaid > $result) {
                $result = $canpaid;
            }
        }
    }
}
echo $result."\n";

// $result = [];
// for ($i=0; $i < count($keyboards); $i++) { 
//     for ($j=0; $j < count($drives); $j++) { 
//         if ($keyboards[$i] + $drives[$j] <= $b) {
//             array_push($result,($keyboards[$i] + $drives[$j])) ;
//         }
//     }
// }
// print_r($result);
// @$max_result = max($result);
// echo $max_result > $b ? '-1' : $max_result;
