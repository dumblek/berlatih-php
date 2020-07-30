<?php
function skor_terbesar($arr){
//kode di sini
    $data = [];
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;

    foreach ($arr as $key => $value){
        if ($value['nilai'] > $n1 && $value['kelas'] == 'Laravel'){
            $n1 = $value['nilai'];
            $data[$value['kelas']] = 
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value["nilai"]
            ];
        } else if ($value['nilai'] > $n2 && $value['kelas'] == 'React Native'){
            $n2 = $value['nilai'];
            $data[$value['kelas']] = 
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value["nilai"]
            ];
        } else if ($value['nilai'] > $n3 && $value['kelas'] == 'React JS'){
            $n3 = $value['nilai'];
            $data[$value['kelas']] = 
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value["nilai"]
            ];
        }
    } return $data;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
