<?php
function tentukan_deret_geometri($arr) {
// kode di sini
for ($i = 0; $i < count($arr)-1; $i++){
    $r = $arr[1] / $arr[0];
    if ($arr[$i+1] / $arr[$i] != $r){
        $hasil = false;
    } else {
        $hasil = true;
    }
} echo ($hasil == 1) ? "true" : "false";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br>";
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "<br>";
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>