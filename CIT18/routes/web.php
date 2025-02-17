<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;


// Route 1: Returns a simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route 2: Calls a method in GreetController to return a view
Route::get('/greet', [GreetController::class, 'greet']);


// Resourceful routes for tasks
Route::resource('tasks', TaskController::class);