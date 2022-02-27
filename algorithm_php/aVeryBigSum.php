<?php
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
$hasil = 0;
for ($i=0; $i < count($ar); $i++) { 
    $hasil+=$ar[$i];
}
return $hasil;