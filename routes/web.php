<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ImageController::class, 'index'])->name('home');
Route::resource('images', ImageController::class);


