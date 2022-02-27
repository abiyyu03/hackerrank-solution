<?php
/* 
jan 31
feb 28 29
mar 31
apr 30
mei 31
jun 30
jul 31
agu 31
sep 30
okt 31
nov 30
des 31 
echo "13.09.$year";
 echo 256-(31+15+31+30+31+30+31+31).".09.".$year;
 kemungkinan :
 1. angka tidak habis dibagi 400 tapi habis dibagi 4 
 2. angka habis dibagi 400 dan atau 4 == tahun kabisat
 3. angka tidak habis dibagi 400 dan atau 4 == bukan tahun kabisat
 4. angka 1918 hanya memiliki 15 hari dibulan februari

 langkah :
 1. jika angka habis dibagi 400 == tahun kabisat
 2. jika tidak tidak habis dibagi 400, cek kembali, jika angka tersebut habis dibagi 100 dan merupkan angka diatas 2000 == bukan tahun kabisat
    namun, jika angka habis dibagi 4 == tahun kabisat

*/
$year = 1918;
if ($year % 400 == 0) {
    echo 256-(31+29+31+30+31+30+31+31).".09.".$year;
} elseif ($year % 400 != 0) {
    if ($year % 100 == 0 && $year > 2000) {
        echo "13.09.$year";
    } elseif ($year % 4 == 0) {
        echo 256-(31+29+31+30+31+30+31+31).".09.".$year;
    } elseif ($year == 1918) {
         echo 256-(31+15+31+30+31+30+31+31).".09.".$year;
    }else {
        echo "13.09.$year";
    }
} 