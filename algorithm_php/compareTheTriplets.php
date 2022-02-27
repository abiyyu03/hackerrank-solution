<?php
$a = [2,4,7];
$b = [4,2,7];
$result_alice = 0;
$result_bob = 0;
for ($i=0; $i < count($a); $i++) { 
    if($a[$i] > $b[$i])
    {
        $result_alice+=1;
    }elseif ($a[$i] < $b[$i]) {
        $result_bob+=1;
    }
}
return array($result_alice,$result_bob); 
