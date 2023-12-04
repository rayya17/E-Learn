<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/layout',[LayoutController::class,'index'])->name('layout');

// Route::get('/home', [HomeController::class, 'home'])->name('HomePage');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::middleware('admin')->group(function(){
    Route::get('calonguru',[AdminController::class,'calonguru'])->name('calonguru');
    Route::Patch('terima/{id}',[AdminController::class,'guruterima'])->name('terimaguru');
    Route::delete('tolak/{id}',[AdminController::class,'tolakguru'])->name('tolakguru');
    Route::get('Dashboardadmin',[AdminController::class,'Dashboardadmin'])->name('Dashboardadmin');
    Route::get('Profileguru',[AdminController::class, 'Profileguru'])->name('Profileguru');
    Route::get('Pengajuandana',[AdminController::class, 'Pengajuandana'])->name('Pengajuandana');
    Route::get('Detailguru/{id}',[AdminController::class, 'Detailguru'])->name('Detailguru');

});

Route::middleware('guru')->group(function(){
    Route::get('dashboardguru',[GuruController::class,'Dashboardguru'])->name('Dashboardguru');
    // Route::get('materi',[MateriController::class,'index'])->name('materi');
    Route::resource('materi', MateriController::class);
});

Route::prefix('Auth')->middleware('guest')->controller(AuthController::class)->group(function () {
    //Register Page
    Route::get('/Register', 'registerPage')->name('registerPage');
    Route::post('/createregis', 'createregis')->name('createregis');

    //register guru
    Route::get('/Registerguru', 'registerguruPage')->name('registerguruPage');
    Route::post('/createregisguru', 'createregisguru')->name('createregisguru');

    //Login Page
    Route::get('/login','loginPage')->name('loginPage');
    Route::post('/loginproses', 'loginproses')->name('loginproses');
});

Route::middleware('user')->group(function(){
    Route::get('/home', [HomeController::class, 'home'])->name('HomePage');
    Route::get('/detailpemesanan', [HomeController::class, 'detailpemesanan'])->name('DetailPemesanan');
    Route::get('/profile', [ProfileController::class, 'index'])->name('Profile');
});
