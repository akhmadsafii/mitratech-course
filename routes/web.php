<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('blogs', [HomeController::class, 'blog'])->name('blog');
Route::get('courses', [HomeController::class, 'course'])->name('course');
