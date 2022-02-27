<?php
$grades = [73,67,38,33];
$hasil = [];
for ($i=0; $i < count($grades); $i++) { 
    if($grades[$i] > 35)
    {
        //jika nilai kelipatan 5
        if($grades[$i] % 5 == 0)
        {
            array_push($hasil,$grades[$i]);
        //jika hasil sisa bagi kurang dari 3
        } elseif((5-($grades[$i] % 5)) < 3) { 
            $selisih = 5 - ($grades[$i] % 5);   
            $hasil_jumlah = $grades[$i]+$selisih;
            array_push($hasil,$hasil_jumlah);
        } else {
            array_push($hasil,$grades[$i]);
        }
        
    } else {
        array_push($hasil,$grades[$i]);
    }
}
print_r($hasil);