<?php
$n = 2;
//mendefinisikan orang yang mendapat iklan pada hari pertama
$first_day = 5;
//mendefinisikan orang yang menyukai iklan pada hari pertama
$result = 2;
for ($i=1; $i < $n; $i++) { 
    //variabel akan bertambah seiring dengan bertambahnya hari
    $first_day = floor($first_day/2)*3;
    //variabel ini akan menyimpan orang yang menyukai iklan dari hari ke hari
    $result += floor($first_day/2);
}
echo $result;