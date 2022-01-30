<?php
$n = intval(trim(fgets(STDIN)));
$handle = fopen('php://stdin','r');
fscanf($handle,"%d",$n);
$result = 0;
$max = 0;
while($n > 0)
{
    if($n % 2 == 1){
        $result++;
        if($result>=$max){
            $max=$result;
        } 
    }else {
            $result = 0;
        }
        $n = $n/2;
}
print($max);
fclose($handle);
