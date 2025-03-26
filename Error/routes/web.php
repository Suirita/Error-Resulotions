<?php

use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', ErrorController::class);

Route::get('/test', function () {
    return view('ErrorIndex');
})->name('test');
