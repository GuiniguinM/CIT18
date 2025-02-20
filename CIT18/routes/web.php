<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;


// Returns a simple message//
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Calls a method in GreetController to return a view//
Route::get('/greet', [GreetController::class, 'greet']);


// Resourceful routes for tasks//
Route::resource('tasks', TaskController::class);

//Blade Templating Sample//
Route::get('/', function () {
    $items = ['sample', 'example', 'datingample'];
    $message = 'Testing';
    $show_button = true;
    $show_text = false;
    return view('home', compact('items', 'message', 'show_button', 'show_text'));
})->name('home');

Route::get('/about', function () {
    $aboutText = 'We are a simple Laravel application to demonstrate Blade syntax.';
    return view('about', compact('aboutText'));
})->name('about');