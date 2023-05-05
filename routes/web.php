<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/team', [TeamController::class, 'index'])->name('index');
Route::get('/agenda', [AgendaController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('index');
Route::post('/contact/store', [ContactController ::class, 'store'])->name('store');
// ==============================================================
// Route Login
// ==============================================================

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/store', [AuthController::class, 'store'])->name('store');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ==============================================================
// Route User
// ==============================================================