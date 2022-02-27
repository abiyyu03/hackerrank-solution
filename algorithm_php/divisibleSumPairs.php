<?php
$k = 3;
$s = 0;
$ar = array_values([1, 2,3]);
$n = count($ar);

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $i; $j++) {
        $result = $ar[$i] + $ar[$j];
        if($result % $k == 0){
            $s+=1;
        }
    // echo $ar[$i]+$ar[$j]." ";
    }
}
echo $s;