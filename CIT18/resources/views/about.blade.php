<!-- Blade Templating Sample -->

@extends('layout')

@section('title', 'About')

@section('content')
    <h2>About Us</h2>
    <p>{{ $aboutText }}</p>

    @for ($i = 0; $i < 5; $i++)
        <p>Loop iteration: {{ $i }}</p>
    @endfor
@endsection
