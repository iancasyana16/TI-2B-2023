@extends('layouts.main')
@section('content')
    <div class="h1 my-3">
        {{-- {{ $title }} --}}
        {{ $title . ' ' . $mhs }}
    </div>
    <div class="h3">
        {{$desk}}
    </div>
    <table class="table table-hover table-bordered my-4">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PRODI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datamhs as $row)
            <tr>
                <td>{{$row['nim']}}</td>
                <td>{{$row['nama']}}</td>
                <td>{{$row['prodi']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
