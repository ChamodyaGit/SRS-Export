<?php

use App\Http\Controllers\HomeController;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact');
Route::get('/alba', [HomeController::class, 'albaPage'])->name('alba');
Route::get('/mexican', [HomeController::class, 'mexicanPage'])->name('mexican');

Route::post('/send-message', [HomeController::class, 'sendMail'])->name('send.mail');
