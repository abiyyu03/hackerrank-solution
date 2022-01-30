<?php
$scores = [10 ,5, 20, 20, 4, 5, 2, 25, 1];
$max = [$arr[0]];
$min = [$arr[0]];
$max_result = 0;
$min_result = 0;
for ($i=0; $i < count($scores); $i++) {
    if (end($max) > $scores[$i]) {
        array_push($max,$scores[$i]);
        $max_result+=1;
    } else { 
        $max_result+=0;
    }
    
    if ($scores[$i] > end($min)){
        array_push($min,$scores[$i]);
        $min_result+=1;
    } else { 
        $min_result+=0;
    }
}

echo $min_result." ".$max_result; 