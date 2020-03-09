<?php

function keliling_persegi_panjang($panjang, $lebar){
    return 2*($panjang+$lebar);
}
function luas_persegi_panjang($panjang,$lebar){
    return $panjang * $lebar;
}
$p = 5;
$l = 5;
echo "Keliling Persegi Panjang dengan panajang $p =  dan lebar $l = ";
echo keliling_persegi_panjang($p,$l);
echo "Luas Persegi Panjang dengan panajang $p =  dan lebar $l = ";
echo luas_persegi_panjang($p,$l);
?>