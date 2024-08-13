<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){return view('dashboard');})->name('dashboard');

    // Rute profil
    Route::get('profil', [ProfilController::class, 'profil'])->name('profil');
    Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');

    //pemesanan
    Route::get('pemesanan', function () {
        return view('pemesanan');
    });

    //Rute Testimoni
    Route::get('/testimoni', [TestimoniController::class, 'showtestimoni'])->name('testimoni');
    Route::post('/testimoni', [TestimoniController::class, 'savetestimoni'])->name('testimoni.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard_admin', [AdminController::class, 'showadmin'])->name('admin/dashboard_admin');
    Route::delete('/admin/dashboard_admin/{id}', [AdminController::class, 'destroy'])->name('destroy.admin')->withoutMiddleware('auth');
    Route::put('/admin/dashboard_admin', [AdminController::class, 'update'])->name('update.dashboard_admin');

    Route::get('/admin/testimoni_admin', [AdminController::class, 'showtestimoniadmin'])->name('admin/testimoni_admin');
    Route::delete('/admin/testimoni_admin/{id}', [AdminController::class, 'destroytestimoni'])->name('destroy.testimoni')->withoutMiddleware('auth');
    Route::put('/admin/testimoni_admin', [AdminController::class, 'update'])->name('update.testimoni_admin');

    Route::get('/admin/pemesanan_admin', function () { return view('/admin/pemesanan_admin'); });
});

Route::get('homepage', function () {
    return view('homepage');
});


