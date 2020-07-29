<?php
function ubah_huruf($string){
//kode di sini
$hasil = "";
for ($i = 0; $i < strlen($string); $i++){
    $hasil .= chr(ord($string[$i])+1);   
}return $hasil;
}

// TEST CASES
echo (ubah_huruf('wow')); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>