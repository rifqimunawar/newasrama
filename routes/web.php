<?php

use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ContactController;

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
Route::middleware(['auth', 'role:1, 2'])->group(function () {
    Route::get('/galeri', [GaleryController::class, 'index'])->name('index');
    Route::get('/agenda', [AgendaController::class, 'index'])->name('index');
    Route::get('/user', [UserController::class, 'index'])->name('index');
    Route::get('/kamar/user/{id}', [UserController::class, 'kamaruser'])->name('kamar.user');
    Route::post('/contact/store', [ContactController ::class, 'store'])->name('store');
});


// ==============================================================
// Route Admin
// ==============================================================
Route::middleware(['auth', 'role:1,'])->group(function () {
    Route::get('/admin', [HomeController::class, 'statistik'])->name('statistik');
    Route::get('/admin/home', [HomeController::class, 'list'])->name('list');
    Route::get('/admin/home/{id}/edit', [HomeController::class, 'edit'])->name('edit');
    Route::put('/admin/home/{id}', [HomeController::class, 'update'])->name('update');
    Route::get('/admin/about/{id}/edit', [AboutController::class,'edit'])->name('edit');
    Route::put('/admin/about/{id}', [AboutController::class,'update'])->name('update');

    Route::get('/admin/galeri', [GaleryController ::class, 'list'])->name('list');
    Route::get('/admin/galeri/create', [GaleryController ::class, 'create'])->name('create');
    Route::post('/admin/galeri/store', [GaleryController ::class, 'store'])->name('store');
    Route::get('/admin/galeri/{id}/edit', [GaleryController ::class, 'edit'])->name('edit');
    Route::put('/admin/galeri/{id}', [GaleryController ::class, 'update'])->name('update');
    Route::delete('/admin/galeri/{id}', [GaleryController::class, 'destroy'])->name('galeri.destroy');

    // Route Admin User Management
    Route::get('/admin/user', [UserController ::class, 'list'])->name('list');
    Route::get('/admin/dataAdmin', [UserController ::class, 'dataAdmin'])->name('dataAdmin');
    Route::get('/admin/penghuni', [UserController ::class, 'list'])->name('list');
    Route::get('/admin/penghuni/{id}/edit', [UserController ::class, 'edit'])->name('edit');
    Route::put('/admin/penghuni/{id}', [UserController ::class, 'update'])->name('update');
    // Route Admin Team Edit
    Route::get('/admin/team/create', [TeamController ::class, 'create'])->name('create');
    Route::post('/admin/team/store', [TeamController ::class, 'store'])->name('store');
    Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    // Route Admin Data Admin
    Route::get('/admin/user/create', [UserController ::class, 'create'])->name('create');
    Route::post('/admin/user/store', [UserController ::class, 'store'])->name('store');
    Route::get('/admin/user/{id}/edit', [UserController ::class, 'edit'])->name('edit');
    Route::put('/admin/user/{id}', [UserController ::class, 'update'])->name('update');
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    // Route Admin Agenda Management
    Route::get('/admin/agenda', [AgendaController ::class, 'list'])->name('list');
    Route::get('/admin/agenda/create', [AgendaController ::class, 'create'])->name('create');
    Route::post('/admin/agenda/store', [AgendaController ::class, 'store'])->name('store');
    Route::get('/admin/agenda/{id}/edit', [AgendaController ::class, 'edit'])->name('edit');
    Route::put('/admin/agenda/{id}', [AgendaController ::class, 'update'])->name('update');
    Route::delete('/admin/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
    // Route Admin Message Edit
    Route::get('/admin/contact', [ContactController ::class, 'list'])->name('list');
    Route::delete('/admin/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    // Route Admin Agenda Management
    Route::get('/admin/kamar', [KamarController ::class, 'index'])->name('index');
    Route::get('/admin/kamar/create', [KamarController ::class, 'create'])->name('create');
    Route::post('/admin/kamar/store', [KamarController ::class, 'store'])->name('store');
    Route::get('/admin/kamar/{id}/edit', [KamarController ::class, 'edit'])->name('edit');
    Route::get('/admin/kamar/{id}/show', [KamarController ::class, 'show'])->name('show');
    Route::put('/admin/kamar/{id}', [KamarController ::class, 'update'])->name('update');
    Route::delete('/admin/kamar/{id}', [KamarController::class, 'destroy'])->name('kamar.destroy');
});