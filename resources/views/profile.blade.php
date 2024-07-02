<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    @php
    $username = 'Indika Putra Praisah';
    $role = 'admin';
    @endphp
    @if ($role == "admin")
        <H1>Hello {{$username}}</H1>
        <p>Role Anda {{$role}} </p>
    @elseif ($role == "kasir")
        <h1>Hello {{$username}}</h1>
        <p> Role Anda {{$role}}</p>    
    @endif
</body>
</html>