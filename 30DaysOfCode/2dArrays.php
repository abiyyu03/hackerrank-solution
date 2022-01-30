<?php
$handle = fopen("php://stdin","r");
$arr = array();
$sum_list = array();
$top_bottom_count = 3;

//get contents
for($arr_i = 0;$arr_i < 6;$arr_i++)
{
    $arr_temp = fgets($handle);
    array_push($arr,explode(" ",$arr_temp));
}

//loop through contents
for($i = 0; $i < sizeof($arr)-2;$i++)
{
    for($j = 0;$j<=sizeof($arr[$i])-$top_bottom_count;$j++){
        array_push($sum_list,getSum($arr,$i,$j,$top_bottom_count));
    }
}
echo max($sum_list);

function getSum($arr,$row,$col,$count)
{
    $sum = 0;
    for($i = 0;$i<$count;$i++){
        $sum += $arr[$row][$col+$i];
        $sum += $arr[$row+2][$col+$i];
    }
    $sum += $arr[$row+1][$col+1];
    return $sum;
}

/*
1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 0 2 4 4 0
0 0 0 2 0 0
0 0 1 2 4 0

baris 0 => [0][1][2] [1][2][3] [2][3][4] [3][4][5]
baris 1 =>    [1]      [2]       [3]        [4]
baris 2 => [0][1][2] [1][2][3] [2][3][4] [3][4][5]

baris 3 => [0][1][2] [1][2][3] [2][3][4] [3][4][5]
baris 4 =>    [1]      [2]       [3]        [4]
baris 5 => [0][1][2] [1][2][3] [2][3][4] [3][4][5]
*/
// $arr = 
// [[1, 1, 1, 0, 0, 0],
// [0, 1, 0, 0, 0, 0],
// [1, 1, 1, 0, 0 ,0],
// [0, 0, 2, 4, 4, 0],
// [0, 0, 0, 2, 0, 0],
// [0, 0, 1, 2, 4, 0]];
// $max = 0;

// for ($i=0; $i < 4; $i++) { 
//     for ($j=0; $j < 4; $j++) { 
//           $h = $arr[$i][$j]+$arr[$i][$j+1]+$arr[$i][$j+2]
//                 +$arr[$i+1][$j+1]
//                 +$arr[$i+2][$j]+$arr[$i+2][$j+1]+$arr[$i+2][$j+2];
//             if($h > $max){
//                 $max = $h;
//             }
//     }
// }
// echo $max;

/*
0 => 1111111 = 7
1 => 11001100 = 4
2 => 1000100 = 2
3 => 0000000 = 0
4
*/