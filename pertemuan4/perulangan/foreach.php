<?php
$arr_array = array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$arr_array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr_array as $key => $value) {
    echo "$key = $value <br>";
}

foreach ($arr_array2 as $key => $value) {
    echo "$key = $value <br>";
}

$students = [
    [
        'nama' => 'budi',
        'umur' => '14'
    ],
    [
        'nama' => 'buudi',
        'umur' => '13'
    ],
    [
        'nama' => 'buddi',
        'umur' => '15'
    ],
];
foreach ($students as $student) {
    echo $student['nama'] . '-' . $student['umur'] . '<br>';
}
