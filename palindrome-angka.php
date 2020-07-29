<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $stop = false;
  while ($stop != true){
    $angka++;
      if ($angka == strrev($angka)){
          $hasil = $angka;
          $stop = true;
      }
  } return $hasil;
}

// $a = strval(5);
// $a = "5";
// $b = 365;
// $c = strrev($b);

// echo $c;

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>