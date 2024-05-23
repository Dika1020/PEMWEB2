<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <H1> Ini Dashboard</H1>
    <table border="2">
        <tr>
            <td>Nama</td>
            <td>Nim</td>
        </tr>
        @foreach ($dataPribadi as $item)
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['nim'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>