<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware(['auth', 'pusat'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\SuperAdmin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('cabang', 'App\Http\Controllers\SuperAdmin\Master\CabangController');
        Route::resource('user', 'App\Http\Controllers\SuperAdmin\Master\UserController');
        Route::resource('divisi', 'App\Http\Controllers\SuperAdmin\Master\DivisiController');
        Route::resource('jabatan', 'App\Http\Controllers\SuperAdmin\Master\JabatanController');
        Route::resource('karyawan', 'App\Http\Controllers\SuperAdmin\Master\karyawanController');
    });

Route::middleware(['auth', 'hrd'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('jabatan', 'App\Http\Controllers\Admin\Master\JabatanController');
        Route::resource('divisi', 'App\Http\Controllers\Admin\Master\DivisiController');
        Route::resource('jabatan', 'App\Http\Controllers\Admin\Master\JabatanController');
        Route::resource('karyawan', 'App\Http\Controllers\Admin\Master\karyawanController');
    });

Route::middleware(['auth', 'admincabang'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Cabang\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('karyawan', 'App\Http\Controllers\Cabang\Master\karyawanController');
    });
