<?php

use App\Models\Travel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\Guest\PageController;

Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');

route::get('/travels/trashed', [TravelController::class, 'trashed'])->name('travels.trashed');
Route::resource('travels', TravelController::class);