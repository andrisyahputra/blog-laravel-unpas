{{-- @dd($post) --}}
@extends('layout.main')

@section('container')
<article>
    <h1>{{ $post["title"] }}</h1>
    <h5>By : {{ $post["author"] }}</h5>
    <p>{{ $post["post"] }}</p>
</article>
@endsection
