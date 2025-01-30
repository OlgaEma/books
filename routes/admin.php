<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;

// Correct the route to point to AuthorController instead of AdminController
Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('create');
Route::post('/adming/outhors/store', [AuthorController::class, 'store'])->name('store');