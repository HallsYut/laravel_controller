<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

// Route::get('/', function () {
//     return view('user');
// });

// Route::get('/user_detail/{id}', [UserController::class, 'show']);

Route::get('/', [IndexController::class, 'index']);

Route::get('/index_detail/{value}', [IndexController::class, 'show']);