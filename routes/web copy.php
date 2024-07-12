<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function(){
    Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');
    Route::get('/jenis', [Admin\JenisController::class, "index"])->name('jenis.index');
    Route::get('/jenis/create', [ADMIN\JenisController::class, "create"])->name('jenis.create');
    Route::post('/jenis/store', [ADMIN\JenisController::class, "store"])->name('jenis.store');
    Route::delete('/jenis/delete/{id}', [ADMIN\JenisController::class, "delete"])->name('jenis.delete');
    Route::get('/jenis/edit/{id}', [ADMIN\JenisController::class, "edit"])->name('jenis.edit');

    Route::get('/kendaraan', [Admin\KendaraanController::class, "index"])->name('kendaraan.index');
    Route::get('/kendaraan/create', [ADMIN\KendaraanController::class, "create"])->name('kendaraan.create');
    Route::post('/kendaraan/store', [ADMIN\KendaraanController::class, "store"])->name('kendaraan.store');
    Route::delete('/kendaraan/delete/{id}', [ADMIN\KendaraanController::class, "delete"])->name('kendaraan.delete');
    Route::get('/kendaraan/edit/{id}', [ADMIN\KendaraanController::class, "edit"])->name('kendaraan.edit');
    Route::post('/kendaraan/update/{id}', [ADMIN\KendaraanController::class, "update"])->name('kendaraan.update');

    Route::get('/transaksi', [Admin\TransaksiController::class, "index"])->name('transaksi.index');
    Route::get('/transaksi/create', [ADMIN\TransaksiController::class, "create"])->name('transaksi.create');
    Route::post('/transaksi/store', [ADMIN\TransaksiController::class, "store"])->name('transaksi.store');
    Route::delete('/transaksi/delete/{id}', [ADMIN\TransaksiController::class, "delete"])->name('transaksi.delete');
    Route::get('/transaksi/edit/{id}', [ADMIN\TransaksiController::class, "edit"])->name('transaksi.edit');
    Route::post('/transaksi/update/{id}', [ADMIN\TransaksiController::class, "update"])->name('transaksi.update');

    Route::get('/area_parkir', [Admin\Area_parkirController::class, "index"])->name('area_parkir.index');
    Route::get('/area_parkir/create', [ADMIN\Area_parkirController::class, "create"])->name('area_parkir.create');
    Route::post('/area_parkir/store', [ADMIN\Area_parkirController::class, "store"])->name('area_parkir.store');
    Route::delete('/area_parkir/delete/{id}', [ADMIN\Area_parkirController::class, "delete"])->name('area_parkir.delete');
    Route::get('/area_parkir/edit/{id}', [ADMIN\Area_parkirController::class, "edit"])->name('area_parkir.edit');
    Route::post('/area_parkir/update/{id}', [ADMIN\Area_parkirController::class, "update"])->name('area_parkir.update');

    Route::get('/kampus', [Admin\KampusController::class, "index"])->name('kampus.index');
    Route::get('/kampus/create', [ADMIN\KampusController::class, "create"])->name('kampus.create');
    Route::post('/kampus/store', [ADMIN\KampusController::class, "store"])->name('kampus.store');
    Route::delete('/kampus/delete/{id}', [ADMIN\KampusController::class, "delete"])->name('kampus.delete');
    Route::get('/kampus/edit/{id}', [ADMIN\KampusController::class, "edit"])->name('kampus.edit');
    Route::post('/kampus/update/{id}', [ADMIN\KampusController::class, "update"])->name('kampus.update');


});
