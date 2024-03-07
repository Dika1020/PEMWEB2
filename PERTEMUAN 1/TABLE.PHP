<?php  
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78]; 
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68]; 
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70]; 
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];   
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4]; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Siswa</title>
    <style>
      .daftar{
        text-align: center;
      }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3 class="daftar">Daftar Nilai Siswa</h3> 
    <table>
        <thead> 
            <tr> 
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th> 
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th> 
            </tr>      
        </thead> 
        <tbody> 
            <?php 
            $nomor = 1;  
            foreach($ar_nilai as $ns){ 
                echo '<tr>';
                echo '<td>'.$nomor.'</td>'; 
                echo '<td>'.$ns['nim'].'</td>'; 
                echo '<td>'.$ns['uts'].'</td>'; 
                echo '<td>'.$ns['uas'].'</td>'; 
                echo '<td>'.$ns['tugas'].'</td>'; 
                $nilai_akhir  = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3; 
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>'; 
                echo '</tr>'; 
                $nomor++; 
            } 
            ?> 
        </tbody>         
    </table>
</body>
</html>
