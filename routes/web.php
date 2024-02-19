<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::get('posts', [\App\Http\Controllers\Post\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [\App\Http\Controllers\Post\PostController::class, 'show'])->name('posts.show');

Route::middleware('auth')->group(function () {

    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

});

Route::middleware('guest')->group(function (){

    Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

});
