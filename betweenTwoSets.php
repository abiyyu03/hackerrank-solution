<?php
$a = [3];
$b = [20,30,12];
$b_count = sizeof($b);
$start = end($a);
$end = $b[0];
$result = 0;
$multiple = 0;
while ($multiple <= $end) { 
    $multiple+=$start;
    if ($end % $multiple == 0) {
        $result++;
    }
}
echo $result;