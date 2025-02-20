@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label for="description">Description</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label for="is_completed">Completed</label>
        <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>

        <button type="submit">Update Task</button>
    </form>
@endsection
