<?php
$data_arrayHewan = [
    ["nama" => "kucing", "warna" => "hitam"],
    ["nama" => "anjing", "warna" => "putih"]
];
?>


<table border="1">
    <tr>
        <td>nama</td>
        <td>warna</td>
    </tr>
    <?php foreach ($data_arrayHewan as $hewan) { ?>
        <tr>
            <td><?= $hewan["nama"]; ?></td>
            <td><?= $hewan["warna"]; ?></td>
        </tr>
    <?php } ?>
</table>