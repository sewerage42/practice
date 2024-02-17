<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
