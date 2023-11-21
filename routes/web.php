<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'home'])->name('HomePage');


Route::prefix('Guru')->middleware('')->controller(GuruController::class)->group(function(){


});

Route::prefix('Auth')->middleware('guest')->controller(AuthController::class)->group(function () {
    //Register Page
    Route::get('/Register', 'registerPage')->name('registerPage');
    Route::post('/createregis', 'createregis')->name('createregis');

    //Login Page
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::post('/loginproses', 'loginproses')->name('loginproses');
});
