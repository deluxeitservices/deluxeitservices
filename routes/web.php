<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('seo', [App\Http\Controllers\HomeController::class, 'seo'])->name('seo');
Route::get('contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::get('portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::post('contactusformsubmit', [App\Http\Controllers\HomeController::class, 'contactusformsubmit'])->name('contactusformsubmit');