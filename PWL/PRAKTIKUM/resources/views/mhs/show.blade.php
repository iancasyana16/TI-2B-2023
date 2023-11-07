<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebSaya.com</title>
</head>

<body>

    {{-- untuk mengatur banyak sedikit nya mahasiswa ada di file mhsController --}}

    @if (count($mhs) == 1)
        <p>Jumlah Mahasiswa adalah 1</p>
    @elseif (count($mhs) == 2)
        <p>Jumlah Mahasiswa adalah 2</p>
    @endif
        <p>Jumlah Mahasiswa adalah Banyak</p>

</body>

</html>
