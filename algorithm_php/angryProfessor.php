<?php
$a = [-1, -3, 4, 2];
$k = 3;
$ontime = 0;
$tolate = 0;
//yes if canceled, otherwise no
for ($i=0; $i < count($a); $i++) { 
    if($a[$i] <= 0)
    {
        $ontime++;
    } else {
        $tolate++;
    }
}
echo $ontime < $k ? "YES" : "NO";