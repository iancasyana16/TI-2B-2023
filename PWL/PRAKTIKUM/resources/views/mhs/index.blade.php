<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebSaya.com</title>
</head>
<body>

    {{-- variabel diisi dengan nilai default --}}
    <h1>Selamat datang {{$mhs}} di WebSaya.com</h1>

    {{-- variabel tidak diisi dengan nilai default --}}
    {{-- <h1>Selamat datang {{ isset($mhs) ? $mhs : 'Tidak Ada' }}</h1>   --}}

    

</body>
</html>