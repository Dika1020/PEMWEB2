<?php
$arr_array = array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$arr_array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr_array as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}

$students = [
    [
        'nama' => 'Budi',
        'umur' => 12
    ],
    [
        'nama' => 'Andi',
        'umur' => 13
    ],
    [
        'nama' => 'Caca',
        'umur' => 14
    ]
];
foreach ($students as $student) {
    echo $student['nama'] . ' - ' . $student['umur'] . '<br>';
}