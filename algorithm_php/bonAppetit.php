<?php
$bill = [72, 53, 60, 66, 90, 62, 12, 31, 36, 94];
$count = sizeof($bill);
$b = 288; 
$k = 6;
$result = 0; 
for ($i=0; $i < $count; $i++) {
    $result+=$bill[$i];
}
if ((($result-$bill[$k])/2) == $b) {
    echo "Bon Appetit";
} else {
    echo $b-(($result-$bill[$k])/2);
}
