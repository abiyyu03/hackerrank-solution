<?php
// $ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$ar = [1, 2, 1,2,4];
$n = count($ar);
$remove_duplicate = array_unique($ar);
$ar_count_values = array_count_values($ar);
$result = 0;
foreach($remove_duplicate as $arr){
    $count_color = $ar_count_values[$arr];
    if($count_color > 1)
    $result+=floor($count_color/2);
}
echo $result;

//source = https://gist.github.com/meyfemi/828c096d97309eac63e2de227a286b00/revisions

// another one solution 
// for ($i=0; $i < $n; $i++) { 
//    if($ar[$i] != 0) {
//        for ($j=$i+1; $j < $n; $j++) { 
//            if ($ar[$i] == $ar[$j]) {
//                $result++;
//                $ar[$j] = 0;
//                break;
//            }
//        }
//    }
// }
// echo $result;


//------------------------

// for($i=0;$i<$n;$i++){
//       $f[$ar[$i]]++;
// }