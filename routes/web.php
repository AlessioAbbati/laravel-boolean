<?php

use App\Models\Travel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\Guest\PageController;

<<<<<<< HEAD
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
=======
Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');

>>>>>>> origin/CRUD_3_nicola
Route::resource('travels', TravelController::class);