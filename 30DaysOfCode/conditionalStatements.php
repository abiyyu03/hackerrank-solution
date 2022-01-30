<?php


$N = intval(trim(fgets(STDIN)));
if($N % 2 == 1){
    print("Weird");
}elseif($N % 2 == 0 && $N >= 2 && $N <= 5) {
    print("Not Weird");
} elseif($N % 2 == 0 && $N >= 6 && $N <= 20){
    print("Weird");
} elseif($N > 20){
    print("Not Weird");
}
