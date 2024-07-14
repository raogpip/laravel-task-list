<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//simple route
Route::get('/hello', function () {
    return 'Hello';
})->name('hello');

//redirect route
Route::get('/hallo', function () {
    return redirect()->name('hello');
});

//dynamic route
Route::get('/greet/{name}', function ($name) {
    return 'Hello, ' . $name . '!';
});

//fallback route
// Route::fallback(function () {
//     return 'still got somewhere';
// });
