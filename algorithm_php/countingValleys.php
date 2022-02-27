<?php
$path = ['D','D','U','U','D','D','U','D','U','U','U','D'];
$steps = 12;
$valleys = 0;
$result = 0;
for ($i=0; $i <$steps ; $i++) { 
    if ($path[$i] == 'U') {
        if ($result == (-1)) {
            $valleys++;
        }
        $result++;
    } else {
        $result--;
    }
}

echo $valleys;