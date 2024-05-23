<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;
use App\Http\Controllers\PegawaiController;

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

/**
 * Route Salam
 * Untuk membuat halaman salam dengan tampilan yang ditentukan
 */
Route::get('/salam', function () {
    return "Assalamualaikum STTNF, Selamat Datang";
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/laporan', [DashboardController::class, 'laporan']);

Route::get('/admin',[ADMIN\DashboardController::class, "index"]);
Route::get('/pegawai', [PegawaiController::class, 'index']);