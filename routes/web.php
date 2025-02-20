<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store/', [ContactController::class, 'store'])->name('contact.store');
