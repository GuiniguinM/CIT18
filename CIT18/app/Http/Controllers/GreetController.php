<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    // Method to return the greet view
    public function greet()
    {
        return view('greet');
    }
}