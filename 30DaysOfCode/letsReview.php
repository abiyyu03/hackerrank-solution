<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
for ($j=0; $j < $n; $j++) { 
    $s = str_split(fgets(($_fp)));
    $s = str_replace("\n",'',$s);
    
    $even = '';
    $odd = '';
    for ($i=0; $i < count($s); $i++) { 
        if ($i % 2 == 0) {
            $even .= $s[$i];
        } 
        if($i % 2 != 0) {
            // $s_2 .= substr($S,$i,1);
            $odd .= $s[$i];
        }
    }
    echo $even." ".$odd."\n";
}
fclose($_fp);
