<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/save', [UsersController::class, 'store'])->name('save');

Route::get('/users', [UsersController::class, 'index'])->name('display');
