<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Appcontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KonsentrasiController;
use App\Http\Controllers\KarierController;
use App\Http\Controllers\KontakController;

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



Route::get('/storage-link', function () {
     $targetFolder = storage_path('/app');
   $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
   symlink($targetFolder,$linkFolder);
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
//-------------------------------Berita----------------------------------
Route::get('/Kabar-Berita', [Appcontroller::class, 'index'])->name('app.berita');
Route::get('/detail/{slug}', [Appcontroller::class, 'detail'])->name('app.slug');

//-------------------------------Galeri----------------------------------
Route::get('/Foto-Kegiatan', [Appcontroller::class, 'galeri'])->name('app.photo');

//-------------------------------Guru----------------------------------
Route::get('/Guru', [Appcontroller::class, 'guru'])->name('app.guru');
Route::get('/Guru/search', [Appcontroller::class, 'search'])->name('guru.search');

//-------------------------------Kontak----------------------------------
Route::get('/Hubungi-Kami', [Kontakcontroller::class, 'index'])->name('contac');

//-------------------------------Konsentrasi----------------------------------
Route::get('/Konsentrasi', [Appcontroller::class, 'konsentrasi'])->name('app.konsentrasi');

//-------------------------------Konsentrasi----------------------------------
Route::get('/Lowongan-Kerja', [Appcontroller::class, 'karier'])->name('app.karier');
Route::get('/Loker/{slug}', [Appcontroller::class, 'detailkarier'])->name('app.slugkarier');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita')->middleware('auth');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::PUT('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::post('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.hapus')->middleware('auth');


Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::PUT('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/{id}', [PhotoController::class, 'destroy'])->name('photo.hapus')->middleware('auth');
Route::get('/photo/{category?}', [PhotoController::class, 'category'])->name('photo.category');


Route::get('/guru', [GuruController::class, 'index'])->name('guru')->middleware('auth');
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store')->middleware('auth');
Route::PUT('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update')->middleware('auth');
Route::post('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.hapus')->middleware('auth');


Route::get('/konsentrasi', [KonsentrasiController::class, 'index'])->name('konsentrasi')->middleware('auth');
Route::post('/konsentrasi/store', [KonsentrasiController::class, 'store'])->name('konsentrasi.store')->middleware('auth');
Route::PUT('/konsentrasi/update/{id}', [KonsentrasiController::class, 'update'])->name('konsentrasi.update')->middleware('auth');
Route::post('/konsentrasi/{id}', [KonsentrasiController::class, 'destroy'])->name('konsentrasi.hapus')->middleware('auth');
Route::get('/konsentrasi/{category?}', [KonsentrasiController::class, 'category'])->name('konsentrasi.category');

Route::get('/karier', [KarierController::class, 'index'])->name('karier')->middleware('auth');
Route::get('/karier/create', [KarierController::class, 'create'])->name('karier.create')->middleware('auth');
Route::post('/karier/store', [KarierController::class, 'store'])->name('karier.store')->middleware('auth');
Route::get('/karier/edit/{id}', [KarierController::class, 'edit'])->name('karier.edit')->middleware('auth');
Route::PUT('/karier/update/{id}', [KarierController::class, 'update'])->name('karier.update')->middleware('auth');
Route::post('/karier/{id}', [KarierController::class, 'destroy'])->name('karier.hapus')->middleware('auth');

