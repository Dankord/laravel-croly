<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

Route::get('/about', [PagesController::class, 'about']);
Route::get('/', [PagesController::class, 'index']);
Route::get("/service", [PagesController::class, 'services']);
// Route::get('/posts', [PostController::class, 'index']);
Route::resource("/posts", PostController::class);