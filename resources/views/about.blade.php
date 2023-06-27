@extends('layout.main')

@section('container')

    <h1>Halaman About</h1>
    <img src="image/{{ $gambar }}" class="img-fluid rounded-top" alt="{{ $nama }}.jpg" width="200">
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>


@endsection
