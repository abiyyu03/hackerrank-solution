<?php
$arr = [[1,2,3],
        [4,5,6],    
        [9,8,9]];
$hasil=0;
$hasil2=0;
$n=0; 
for($k=count($arr)-1; $k >= 0; $k--) {
    $hasil+=$arr[$n][$n];
    $hasil2+=$arr[$n][$k];
    $n+=1;
}return abs($hasil-$hasil2);
        