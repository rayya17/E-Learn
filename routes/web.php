<?php

use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\DetailMateriController;

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
    return view('index');
});

// Route::post('/layout',[LayoutController::class,'index'])->name('layout');

// Route::get('/home', [HomeController::class, 'home'])->name('HomePage');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('admin')->group(function(){
    Route::get('calonguru',[AdminController::class,'calonguru'])->name('calonguru');
    Route::Patch('terima/{id}',[AdminController::class,'guruterima'])->name('terimaguru');
    Route::delete('tolak/{id}',[AdminController::class,'tolakguru'])->name('tolakguru');
    Route::get('Dashboardadmin',[AdminController::class,'Dashboardadmin'])->name('Dashboardadmin');
    Route::get('/get-monthly-income',[AdminController::class,'getMonthlyIncomeData'])->name('getMonthlyIncomeData');
    Route::get('/get-year-income',[AdminController::class,'getYearIncomeData'])->name('getYearIncomeData');
    Route::get('Profileguru',[AdminController::class, 'Profileguru'])->name('Profileguru');
    // Route::get('Pengajuandana',[AdminController::class, 'Pengajuandana'])->name('Pengajuandana');
    Route::get('Detailguru/{id}',[AdminController::class, 'Detailguru'])->name('Detailguru');
    Route::get('pengajuanguru', [AdminController::class, 'pengajuanguru'])->name('pengajuanguru');
    Route::post('terimapengajuan/{id}', [AdminController::class, 'terimapengajuan'])->name('terimapengajuan');
    // Route::post('/notifDelete/{id}', [NotifikasiController::class, 'markRead'])->name('notifDelete');
    Route::post('tolakpengajuan/{id}', [AdminController::class, 'tolakpengajuan'])->name('tolakpengajuan');
});

Route::middleware('guru')->group(function () {
    Route::get('dashboardguru', [GuruController::class, 'Dashboardguru'])->name('dashboardguru');
    // Route::resource('detailmateri', DetailMateriController::class);
    // Route::put('detailmateri-update/{id}', [DetailMateriController::class, 'update'])->name("update-detailMateri");
    // Route::get('materi',[MateriController::class,'index'])->name('materi');
    Route::resource('materi', MateriController::class);
    Route::get('Pengumpulantugas', [GuruController::class, 'Pengumpulantugas'])->name('Pengumpulantugas');
    Route::resource('Pembayaran', GuruController::class);
    // Route::get('Penarikansaldo', [GuruController::class, 'Penarikansaldo'])->name('Penarikansaldo');
    Route::patch('mengajukandana/{id}', [GuruController::class, 'mengajukandana'])->name('mengajukandana');
    Route::get('/profileguru', [ProfileController::class, 'profileGuru'])->name('profileguru');
    Route::put('/profileguruUp/{id}', [ProfileController::class, 'profileguruUp'])->name('profileguruUp');
    Route::get('materidetail/{id}', [GuruController::class, 'materidetail'])->name('materidetail');
    Route::post('/tugas/{materi_id}', [TugasController::class, 'createTugas'])->name('tugas');
    Route::get('/tugas/{tugas_id}/edit', [TugasController::class, 'editTugas'])->name('tugas.edit');
    Route::put('/tugas/{tugas_id}', [TugasController::class, 'updateTugas'])->name('tugas.update');
    Route::delete('/delete-tugas/{id}', [TugasController::class, 'deleteTugas'])->name('tugas.delete');


    // Route::resource('materiGuru',GuruController::class);
});

Route::post('/notifDelete/{id}', [NotifikasiController::class, 'markRead'])->name('notifDelete');

Route::prefix('Auth')->middleware('guest')->controller(AuthController::class)->group(function () {
    //Register Page
    Route::get('/Register', 'registerPage')->name('registerPage');
    Route::post('/createregis', 'createregis')->name('createregis');

    //register guru
    Route::get('/Registerguru', 'registerguruPage')->name('registerguruPage');
    Route::post('/createregisguru', 'createregisguru')->name('createregisguru');

    //Login Page
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::post('/loginproses', 'loginproses')->name('loginproses');

    //forgot and reset password
    Route::get('/forgot-password', 'forgotpassword')->middleware('guest')->name('password.request');
    Route::post('/forgot-password', 'forgotpassword_store')->middleware('guest')->name('password.email');
    Route::get('/reset-password/{token}', 'resetpassword_token')->middleware('guest')->name('password.reset');
    Route::post('/reset-password', 'resetpassword')->middleware('guest')->name('password.update');
});

Route::middleware('user')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('HomePage');
    // Route::get('/searchMateri', [HomeController::class, 'searchMateri'])->name('searchMateri');

    Route::resource('/ulasan', UlasanController::class);
    Route::get('/detailpemesanan', [HomeController::class, 'detailpemesanan'])->name('DetailPemesanan');
    Route::get('/detailpesan', [HomeController::class, 'detailpesan'])->name('detailpesan');
    Route::get('/profile', [ProfileController::class, 'index'])->name('Profile');
    Route::put('/updateProfile/{id}', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/detailmateri_user/{id}', [HomeController::class, 'detailmateri_user'])->name('detailmateri_user');
    Route::get('/order/{order}', [HomeController::class, 'payment'])->name('payment');
    Route::post('/pesan/{materi}', [HomeController::class, 'checkout'])->name('checkout');
    Route::post('/mitrans-callback', [HomeController::class, 'callback'])->name('callback');
    // Route::post('/notifDelete/{id}', [NotifikasiController::class, 'markRead'])->name('notifDelete');
    Route::get('/kumpultugas/{id}', [HomeController::class, 'kumpultugas'])->name('Kumpultugas');
    Route::get('dashboar-materi/{id}', [HomeController::class, 'detailtugas'])->name('Detailtugas');
    Route::get('/isi-materi/{id}', [HomeController::class, 'isimateri'])->name('Isimateri');
    Route::post('/kumpultugas/kirim', [TugasController::class, 'kirimTugas'])->name('pengumpulan');

// Route::get('/', [MateriController::class, 'index'])->name('home');
Route::get('/materi/search', [MateriController::class, 'searchMateri'])->name('searchMateri');

    Route::post('/komentar/create', [KomentarController::class, 'createKomentar'])->name('komentar.create');
    Route::get('/komentar/{id}', [KomentarController::class, 'komentar'])->name('komentar.index');
    Route::delete('/komentar/delete/{komentar}', [KomentarController::class, 'destroy'])->name('komentar.delete');
    Route::post('/reply/{id}',[KomentarController::class,'reply'])->name('reply.komen');
    //  Route::get('/searchingMateri', [HomeController::class, 'searchingMateri'])->name('searchingMateri');
});
Route::get('/pdf/upload', [PdfController::class, 'showForm'])->name('pdf.form');
Route::post('/pdf/upload', [PdfController::class, 'uploadPdf'])->name('pdf.upload');
// Route::get('/pdf/show/{path}', [PdfController::class, 'showPdf'])->name('pdf.show');
