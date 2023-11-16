<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->name('_profile');

Route::get('/login',function(){
    return view('auth.login');
});


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita')->middleware('auth');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::get('/berita/edit/{$id}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::PUT('/berita/update/{$id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::get('/berita/{$id}', [BeritaController::class, 'destroy'])->name('berita.hapus')->middleware('auth');


