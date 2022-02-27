<?php
$height = [1, 6, 3, 5, 2];
$k = 4;

$highest = max($height);
if($highest < $k)
{
    echo 0;
} else {
    echo $highest - $k;   
}