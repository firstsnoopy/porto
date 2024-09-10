<?php

use App\Models\Tentang_Saya;
// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\TentangSayaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('admin.login.index');
});

Route::get('dashboard', [DashboardController::class, 'index']);
// Route::resource('user', UserController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('tentangsaya', TentangSayaController::class);
Route::resource('projects', ProjectsController::class);
Route::resource('kontak', KontakController::class);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::get('login', [LoginController::class, 'index']);
Route::get('logout', [LogoutController::class, 'logout']);



Route::get('/intro', [PortoController::class, 'intro']);
Route::get('/about', [PortoController::class, 'about']);
Route::get('/works', [PortoController::class, 'works']);
Route::get('/contact', [PortoController::class, 'contact']);
Route::get('/base', [PortoController::class, 'base']);
