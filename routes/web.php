<?php

use App\Models\Travel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\Guest\PageController;

Route::get('/',         [TravelController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');

route::get('/travels/trashed', [TravelController::class, 'trashed'])->name('travels.trashed');
Route::resource('travels', TravelController::class);
route::delete('/travels/{travel}/hardDelete', [TravelController::class, 'hardDelete'])->name('travels.hardDelete');
route::post('/travels/{travel}/restore', [TravelController::class, 'restore'])->name('travels.restore');