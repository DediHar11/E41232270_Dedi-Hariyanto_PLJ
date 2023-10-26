@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">HALAMAN HOME</h1>
        <p class="lead">Ini halaman HOME</p>
    </div>
        <p>Nama : {{ $nama }}</p>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach ($pelajaran as $p)
            <li>{{ $p }}</li>
        @endforeach
    </ul>
@endsection('content')
