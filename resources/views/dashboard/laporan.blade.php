<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan jumlah Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #D0D3D4;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Tahun: {{ $tahun }}</p>
    
    <table>
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_mhs as $data)
            <tr>
                <td>{{ $data['prodi'] }}</td>
                <td>{{ $data['jumlah'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>