<?php
# BUBBLE SORT

// $a = [3,2,1];
// $n = sizeof($a);
$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$numSwaps = 0; 
for ($i=0; $i < $n; $i++) {
    for ($j=0; $j < $n-1; $j++) { 
        if($a[$j] > $a[$j+1])
        {
            $first_num = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $first_num;
            $numSwaps+=1;
        }
    }
    if ($numSwaps == 0) {
        break;
    }
}
echo "Array is sorted in ".$numSwaps." swaps. \n";
echo "First Element: ".$a[0]."\n";
echo "Last Element: ".$a[$n-1];

// print_r($a);