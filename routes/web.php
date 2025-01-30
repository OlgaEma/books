<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthorController;




Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about');
// Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors');