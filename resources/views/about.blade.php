@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <ul>
        <li>Nama    : {{ $nama }}</li>
        <li>Email   : {{ $email }}</li>
        <li>Image   : <img src="img/{{ $image }}" alt="{{ $email }}"></li>
    </ul>
@endsection
    
