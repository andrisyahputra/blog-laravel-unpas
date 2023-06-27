{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')

    @foreach ($posts as $item)
        <h2><a href="/posts/{{ $item['slug'] }}">{{ $item['title'] }}</a></h1>
        <h5>{{ $item['author'] }}</h5>
        <p>{{ $item['post'] }}</p>
    @endforeach

@endsection
