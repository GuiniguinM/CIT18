<!-- Blade Templating Sample -->

@extends('layout')

@section('title', 'Home')

@section('content')
    <h2>Home Page</h2>
    <p>{{ $message }}</p>

    <ul>
        @foreach ($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @if ($show_button) 
        <button>Click Me!</button>
    @elseif ($show_text)
        <p>Oh No, You Can't Click Me</p>
    @else
        <p>What is click</p>
    @endif

@endsection
