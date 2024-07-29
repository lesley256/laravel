<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/get', [AuthController::class, 'logout'])->name('logout');
Route::post('/save', [UsersController::class, 'store'])->name('save');

Route::get('/users', [UsersController::class, 'index'])->name('display');

Route::get('/dashboard', function () {
    return view('dash2');
});
