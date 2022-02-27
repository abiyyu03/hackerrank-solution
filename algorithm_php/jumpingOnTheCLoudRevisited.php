<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c, $k) {
$e = 100;
$n = sizeof($c);
$i = $k % $n;
$e -= $c[$i] * 2 + 1;
while($i != 0)
{
    $i = ($i + $k) % $n;
    $e -= $c[$i] * 2 + 1;
}
return $e;
//     for($i = 0;$i<sizeof($c);$i++)
//     {
//         if($i % $k == 0)
//         {
//             if($c[$i] == 1)
//             {
//                 $e-=3;
//             } else {
//                 $e-=1;
//             }
//         }
//     }
// return $e;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
