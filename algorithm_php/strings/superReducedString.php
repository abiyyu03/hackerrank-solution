<?php
$s = "abiyyu_cakra";
for ($i=1; $i < strlen($s); $i++) { 
    if($s[$i] == $s[$i-1]) {
        // unset($splitted[$i]); //0 2
        // unset($splitted[$i-1]); //1 3
        $s = substr($s,0,$i-1).substr($s,$i+1);
        $i=0;
    } 
}
if(strlen($s) == 0) { echo "Empty String"; }
else { echo $s."\n"; }