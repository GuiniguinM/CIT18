@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea name="description"></textarea>

        <label for="is_completed">Completed</label>
        <input type="checkbox" name="is_completed" value="1">

        <button type="submit">Save Task</button>
    </form>
@endsection
