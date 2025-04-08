<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();// Routes d'authentification

Route::middleware(['auth'])->group(function () {
    Route::resource('services', ServiceController::class);
});
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Routes protégées par le middleware auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    // Ajoutez d'autres routes protégées ici
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

use App\Http\Controllers\ReservationController;

Route::view('/reservation', 'reservation')->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store']);