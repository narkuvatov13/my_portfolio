<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
