<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// ==============================================================
// Route Client
// ==============================================================
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('index');
// ==============================================================
// Route Login
// ==============================================================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// ==============================================================
// Route User
// ==============================================================
Route::middleware(['auth', 'role:1,'])->group(function () {
    Route::get('/galeri', [GaleryController::class, 'index'])->name('index');
    Route::get('/agenda', [AgendaController::class, 'index'])->name('index');
    Route::post('/contact/store', [ContactController ::class, 'store'])->name('store');
});


// ==============================================================
// Route Admin
// ==============================================================
Route::middleware(['auth', 'role:1,'])->group(function () {

    Route::get('/admin', [HomeController::class, 'statistik'])->name('statistik');
});