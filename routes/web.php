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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('/');
Route::get('/services', [\App\Http\Controllers\ServiceController::class,'service']);
Route::get('/about-us', [\App\Http\Controllers\AboutController::class,'about']);
Route::get('/contact-us', [\App\Http\Controllers\ContactController::class,'contact']);
Route::post('/contact-send-emails', [\App\Http\Controllers\ContactController::class,'sendEmails']);
Route::get('/tour/{slug}', [\App\Http\Controllers\ToursController::class,'getTourBySlug'])->name('tour-detalle');