<?php

/*
 * Complete the 'extraLongFactorials' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function extraLongFactorials($n) {
    if($n <= 1)
    {
        return 1;
    } else {
        return $n * extraLongFactorials($n-1);
    }
}
$n = intval(trim(fgets(STDIN)));

print extraLongFactorials($n);
