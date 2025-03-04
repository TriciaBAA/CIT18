<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);

Route::resource('tasks', TaskController::class);

Route::get('/home', [PageController::class, 'home']);

