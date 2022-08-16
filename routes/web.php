<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/Reserve', function () {
    return view('Reserve');
})->name('Reserve');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');



Route::get('/Booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
Route::post('Booking/store', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::post('home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::put('/home/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('home.update');
Route::delete('/home/{memorie}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.destroy');