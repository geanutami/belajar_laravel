<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,('index')])->name('login');
route::post('/',[UserController::class,('login')])->name('login.post');
