<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebSaya.com</title>
</head>

<body>

    <h3>PERULANGAN FOR</h3>
    @for ($i = 0; $i < count($mhs); $i++)
        {{ 'Nama : ' . $mhs[$i] }} <br>
    @endfor
    <hr>

    <h3>PERULANGAN FOR EACH</h3>
    @foreach ($mhs as $item)
        {{ 'Nama : ' . $item }} <br>
    @endforeach
    <hr>

    <h3>PERULANGAN WHILE</h3>
    @php
        $x = 0;
    @endphp
    @while ( $x < count($mhs))
        {{ 'Nama : ' . $mhs[$x] }} <br>
        @php
            $x++
        @endphp
    @endwhile
    <hr>

</body>

</html>
