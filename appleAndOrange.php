<?php
$s = 7; $t = 10; 
$apples = [2,3,-4]; $oranges = [3,-2,-4]; 
$a = 0; $b = 0;
$a_result = 0;$b_result = 0; 

for ($i=0; $i < count($apples); $i++) {
    if(($apples[$i]+$a) >= $s && ($apples[$i]+$a) <= $t)
    {
        $a_result+=1;
    }
}
for ($j=0; $j < count($oranges); $j++) {
    if(($oranges[$j]+$b) >= $s && ($oranges[$j]+$b) <= $t){
        $b_result+=1;
    }
}
echo $a_result."\n";
echo $b_result;