<?php
$k = 0;
$s = 'We promptly judged antique ivory buckles for the next prize';
$str = 'abcdefghijklmnopqrstuvwxyz';
strtolower($s);
str_replace(" ","",$s);
for($i = 0;$i<strlen($s);$i++){
    if(strlen($s) < strlen($str)){
        return 'not pangram';
    }
    for ($j=0; $j < 26; $j++) { 
        if($s[$i] == $str[$j]){
            $k+=1;
            // $i = 0;
            // unset($str[$s[$j]]);
        }
    }
}
// while (strlen($s) != 0) {
    
//     if($s[$j] == $str[$i]){
//         $j+=1;
//         $i = 0;
//         array_shift($s);
//         // unset($str[$s[$j]]);
//     }
//     $i++;
// }
echo $k."\n";
echo ($k == strlen($str)) ? 'pangram' : 'not pangram'."\n";
