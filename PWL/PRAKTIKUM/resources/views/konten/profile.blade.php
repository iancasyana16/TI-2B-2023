@extends('layouts.main')
@section('content')
    <div class="h1 my-3">
        {{ $title }}
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>NAMA LENGKAP</th>
                <th>UMUR</th>
                <th>PRODI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProfile as $row)
            <tr>
                <td>{{$row['namaLengkap']}}</td>
                <td>{{$row['umur']}}</td>
                <td>{{$row['prodi']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
