<?php
$n = 6;
$p = 2;
$front_result = 0;
$back_result = 0;

//loop s/d nilai $n dengan sekali loop +=2. hal tersebut karena dalam 1 lembar terdapat 2 halaman
for ($i=1; $i < $n; $i+=2) { 
    //cek apabila nilai $i atau nilai $i-1 sudah sama dengan nilai $p. dengan kata lain, buku sudah terbuka ke halaman $p
    if ($i == $p || $i-1 == $p) {
        //jika iya, maka break/stop looping
        break;
    }
    //hasil bertambah satu setiap perpindahan halaman
    $front_result++;
}
//loop invers dengan nilai awal $n, dikurangi -2 (karena dalam 1 lembar ada 2 halaman), jika sudah mencapai halaman $p maka berhenti
for ($i=$n; $i > $p; $i-=2) {
    //jika nilai $i-1 sama dengan halaman $p DAN nilai $n tidak habis dibagi 2 (bilangan ganjil)
    if ($i-1 == $p && $n % 2 == 1) {
        //jika iya, maka break/stop looping dan return default nilai 0
        break;
    } else {
        //jika tidak, maka lanjutkan looping s/d nilai $n == $p, artinya halaman sudah terbuka sampai $p
        $back_result++; 
    }
   
}

$result = array($front_result,$back_result);
//ambil hasil minimal dari kedua variabel
echo min($result);
// echo $front_result." ".$back_result;

