<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    @foreach ($datamhs as $datamhs)
    <h2>{{ $datamhs->name }}</h2>
    <p>{{ $datamhs->NIM }}</p>
    @endforeach


</body>
</html>