<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact');
Route::get('/alba', [HomeController::class, 'albaPage'])->name('alba');
Route::get('/mexican', [HomeController::class, 'mexicanPage'])->name('mexican');

Route::post('/send', [HomeController::class, 'sendMail'])->name('mail.send');
