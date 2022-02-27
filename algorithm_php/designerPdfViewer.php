<?php
$h = [1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7];
$word = "zaba";
$length = strlen($word);
$letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$result = [];
for ($i=0; $i < $length; $i++) { 
    for ($j=0; $j < 26; $j++) { 
        if($word[$i] == $letter[$j])
        {
            array_push($result,$h[$j]);
        }
    }
}
echo max($result)*$length; 
// echo ord(-11);

