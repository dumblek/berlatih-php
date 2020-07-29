<?php
function pasangan_terbesar($angka){
// kode di sini
    $angka = strval($angka);
    $tampung = [];
    $hasil = "";
    for ($i = 0; $i < strlen($angka)-1; $i++ ){
        $tampung[$i] = $angka[$i] . $angka[$i+1];
    }
    return max($tampung);
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>