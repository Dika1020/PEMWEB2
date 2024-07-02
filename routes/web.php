<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/admin')->group(function () {
        Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');
            
        Route::get('/jabatan', [ADMIN\PositionContoller::class, "index"])->name('position.index');
        Route::get('/jabatan/create', [ADMIN\PositionContoller::class, "create"])->name('position.create');
        Route::post('/jabatan/store', [ADMIN\PositionContoller::class, "store"])->name('position.store');
        Route::delete('/jabatan/delete/{id}', [ADMIN\PositionContoller::class, "delete"])->name('position.delete');
        Route::get('/jabatan/edit/{id}', [ADMIN\PositionContoller::class, "edit"])->name('position.edit');
    
        Route::get('/employees', [ADMIN\EmployeesController::class, "index"])->name('employees.index');
        Route::get('/employees/create', [ADMIN\EmployeesController::class, "create"])->name('employees.create');
        Route::post('/employees/store', [ADMIN\EmployeesController::class, "store"])->name('employees.store');
        Route::delete('/employees/delete/{id}', [ADMIN\EmployeesController::class, "delete"])->name('employees.delete');
        Route::get('/employees/edit/{id}', [ADMIN\EmployeesController::class, "edit"])->name('employees.edit');
    
        Route::get('/users', [ADMIN\UsersController::class, "index"])->name('users.index');
        Route::get('/users/create', [ADMIN\UsersController::class, "create"])->name('users.create');
        Route::post('/users/store', [ADMIN\UsersController::class, "store"])->name('users.store');
        Route::delete('/users/delete/{id}', [ADMIN\UsersController::class, "delete"])->name('users.delete');
        Route::get('/users/edit/{id}', [ADMIN\UsersController::class, "edit"])->name('users.edit');
    
        Route::get('/members', [ADMIN\MembersController::class, "index"])->name('members.index');
        Route::get('/members/create', [ADMIN\MembersController::class, "create"])->name('members.create');
        Route::post('/members/store', [ADMIN\MembersController::class, "store"])->name('members.store');
        Route::delete('/members/delete/{id}', [ADMIN\MembersController::class, "delete"])->name('members.delete');
        Route::get('/members/edit/{id}', [ADMIN\MembersController::class, "edit"])->name('members.edit');
    
        Route::get('/genres', [ADMIN\GenreController::class, "index"])->name('genres.index');
        Route::get('/genres/create', [ADMIN\GenreController::class, "create"])->name('genres.create');
        Route::post('/genres/store', [ADMIN\GenreController::class, "store"])->name('genres.store');
        Route::delete('/genres/delete/{id}', [ADMIN\GenreController::class, "delete"])->name('genres.delete');
        Route::get('/genres/edit/{id}', [ADMIN\GenreController::class, "edit"])->name('genres.edit');
    
        Route::get('/books', [ADMIN\BooksController::class, "index"])->name('books.index');
        Route::get('/books/create', [ADMIN\BooksController::class, "create"])->name('books.create');
        Route::post('/books/store', [ADMIN\BooksController::class, "store"])->name('books.store');
        Route::delete('/books/delete/{id}', [ADMIN\BooksController::class, "delete"])->name('books.delete');
        Route::get('/books/edit/{id}', [ADMIN\BooksController::class, "edit"])->name('books.edit'); 
    });
});

require __DIR__.'/auth.php';