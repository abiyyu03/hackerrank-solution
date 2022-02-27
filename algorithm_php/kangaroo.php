<?php
$x1 = 0;
$v1 = 3;
$x2 = 4;
$v2 = 2;
if (($x2-$x1)*($v2-$v1) < 0 && ($x2-$x1)%($v2-$v1) == 0 ) {
    echo "YES";
} else {
    echo "NO";
}
//test performance
// $start = hrtime(true);
// echo hrtime(true)-$start;