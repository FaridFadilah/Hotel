<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FumumController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\DompdfController;
use App\Http\Controllers\FkamarController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ResepsionisController;

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
Auth::routes();

//Landing Page
Route::get('/', [LandingPageController::class, "index"])->middleware("auth");
Route::get('/show/{id}', [ReservasiController::class, 'show'])->name('reservasi.tambah')->withoutMiddleware("auth");

//Home Page
Route::get('/user', [ReservasiController::class, 'index'])->name('user')->middleware(["auth", "checkrole:user"]);
Route::get('/resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis')->middleware(["auth", "checkrole:resepsionis"]);

Route::prefix("admin")->name("admin.")->middleware(["auth", "checkrole:admin"])->group(function () {
Route::get('', [KamarController::class,'index'])->name("");
Route::get('/user', [KamarController::class,'user'])->name('user');
Route::get('/petugas', [KamarController::class,'tambahpetugas'])->name('tambah');
Route::post('/simpan', [KamarController::class,'simpanPetugas'])->name('simpan');
Route::get('/delete/{id}', [KamarController::class,'deletePetugas'])->name('destroy');
});
//Admin
Route::prefix("kamar")->controller(KamarController::class)->name("kamar.")->middleware(["auth", "checkrole:admin"])->group(function(){
    Route::get('/show/{id}', 'show')->name('lihat');
    Route::get('/create', 'create')->name('tambah');
    Route::post('/store', 'store')->name("simpan");
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix("fas-kamar")->controller(FkamarController::class)->name("fas.kam.")->middleware(["auth", "checkrole:admin"])->group(function(){
    Route::get('/create/{id}', 'create')->name('tambah');
    Route::post('/store/{id}','store')->name('simpan');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix("fas-umum")->name("fas.umu.")->middleware(["auth", "checkrole:admin"])->group(function(){
    Route::get('/create', [FumumController::class, 'create'])->name('tambah');
    Route::post('/store', [FumumController::class, 'store'])->name('simpan');
    Route::get('/edit/{id}', [FumumController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FumumController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FumumController::class, 'destroy'])->name('destroy');
});

//User
Route::prefix("user")->name("reservasi.")->controller(ReservasiController::class)->middleware(["auth", "checkrole:user"])->group(function(){
    Route::post('/store','store')->name('simpan');
    Route::get('/show/{id}', 'print')->name('lihat');
});

//Resepsionis
Route::prefix("resepsionis")->controller(ResepsionisController::class)->name("resepsionis.")->middleware(["auth", "checkrole:resepsionis"])->group(function(){
    Route::get('/update/{id}', 'updateStatus')->name('update.status');
    Route::get('/delete/{id}', 'destroy')->name("destroy");
});

Route::get('/pdf/{id}', [DompdfController::class, "pdf"])->name("pdf")->middleware(["auth", "checkrole:user"]);