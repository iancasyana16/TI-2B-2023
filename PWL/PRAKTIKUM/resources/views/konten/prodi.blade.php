@extends('layouts.main')
@section('content')
    <div class="h1 my-3">
        {{ $title }}
    </div>

    {{-- <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Nama Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $item)
            <tr>
                <td>{{$item}}</td>
                <td><a href="" class="btn btn-primary btn-sm">PIlih</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>NAMA PRODI</th>
                <th>KODE PRODI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProdi as $row)
            <tr>
                <td>{{$row['nama_prodi']}}</td>
                <td>{{$row['kode_prodi']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
