<?php
$n = 9;
$s = 0;

for ($i=0; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        echo $s*=2,"\n";
    }else {
        $s++;
        echo $s,"\n";
    }
}

/*

1 ganjilx2
2 genap
3 ganjilx2
6 
7
14
15
30

*/