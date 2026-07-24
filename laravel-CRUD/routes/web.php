<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/about', [PagesController::class, 'about']);
Route::get('/', [PagesController::class, 'index']);
Route::get("/service", [Pagescontroller::class, 'services']);
