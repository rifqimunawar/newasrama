<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleriController;
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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// ==============================================================
// Route Admin
// ==============================================================
Route::get('/admin', [AdminController::class, 'index'])->name('index')->middleware('auth');
// Route Admin Home Edit0
Route::get('/admin/home', [HomeController::class, 'list'])->name('list')->middleware('auth');
Route::get('/admin/home/{id}/edit', [HomeController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/admin/home/{id}', [HomeController::class, 'update'])->name('update')->middleware('auth');
// Route Admin About Edit
Route::get('/admin/about/{id}/edit', [AboutController::class,'edit'])->name('edit')->middleware('auth');
Route::put('/admin/about/{id}', [AboutController::class,'update'])->name('update')->middleware('auth');
// Route Admin Galeri Edit
Route::get('/admin/galeri', [GaleriController ::class, 'list'])->name('list')->middleware('auth');
Route::get('/admin/galeri/create', [GaleriController ::class, 'create'])->name('create')->middleware('auth');
Route::post('/admin/galeri/store', [GaleriController ::class, 'store'])->name('store')->middleware('auth');
Route::get('/admin/galeri/{id}/edit', [GaleriController ::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/admin/galeri/{id}', [GaleriController ::class, 'update'])->name('update')->middleware('auth');
Route::delete('/admin/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy')->middleware('auth');
// Route Admin Team Edit
Route::get('/admin/team', [TeamController ::class, 'list'])->name('list')->middleware('auth');
Route::get('/admin/team/create', [TeamController ::class, 'create'])->name('create')->middleware('auth');
Route::post('/admin/team/store', [TeamController ::class, 'store'])->name('store')->middleware('auth');
Route::get('/admin/team/{id}/edit', [TeamController ::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/admin/team/{id}', [TeamController ::class, 'update'])->name('update')->middleware('auth');
Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy')->middleware('auth');
// Route Admin Data Admin
Route::get('/admin/user', [UserController ::class, 'index'])->name('index')->middleware('auth');
Route::get('/admin/user/create', [UserController ::class, 'create'])->name('create')->middleware('auth');
Route::post('/admin/user/store', [UserController ::class, 'store'])->name('store')->middleware('auth');
Route::get('/admin/user/{id}/edit', [UserController ::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/admin/user/{id}', [UserController ::class, 'update'])->name('update')->middleware('auth');
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');
// Route Admin Agenda Management
Route::get('/admin/agenda', [AgendaController ::class, 'list'])->name('list')->middleware('auth');
Route::get('/admin/agenda/create', [AgendaController ::class, 'create'])->name('create')->middleware('auth');
Route::post('/admin/agenda/store', [AgendaController ::class, 'store'])->name('store')->middleware('auth');
Route::get('/admin/agenda/{id}/edit', [AgendaController ::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/admin/agenda/{id}', [AgendaController ::class, 'update'])->name('update')->middleware('auth');
Route::delete('/admin/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy')->middleware('auth');
// Route Admin Message Edit
Route::get('/admin/contact', [ContactController ::class, 'list'])->name('list')->middleware('auth');
Route::delete('/admin/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy')->middleware('auth');