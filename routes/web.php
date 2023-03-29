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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['auth', 'superadmin'])
    ->group(function () {
        Route::get('/superadmin', [App\Http\Controllers\SuperAdmin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('superadmin-cabang', 'App\Http\Controllers\SuperAdmin\Master\CabangController');
        Route::resource('superadmin-user', 'App\Http\Controllers\SuperAdmin\Master\UserController');
        Route::resource('superadmin-divisi', 'App\Http\Controllers\SuperAdmin\Master\DivisiController');
        Route::resource('superadmin-jabatan', 'App\Http\Controllers\SuperaAmin\Master\JabatanController');
        Route::get('/superadmin-karyawan', [App\Http\Controllers\SuperAdmin\Master\KaryawanController::class, 'index'])->name('superadmin.karyawan');
        Route::get('/superadmin-karyawan-tambah', [App\Http\Controllers\SuperAdmin\Master\KaryawanController::class, 'create'])->name('superadmin.karyawan-tambah');
        Route::post('/superadmin-karyawan-store', [App\Http\Controllers\SuperAdmin\Master\KaryawanController::class, 'store'])->name('superadmin.karyawan-store');
        Route::get('/superadmin-karyawan-edit/{id?}', [App\Http\Controllers\SuperAdmin\Master\KaryawanController::class, 'edit'])->name('superadmin.karyawan-edit');
        Route::put('/superadmin-karyawan-update/{id?}', [App\Http\Controllers\SuperAdmin\Master\KaryawanController::class, 'update'])->name('superadmin.karyawan-update');
    });

Route::middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('admin-user', 'App\Http\Controllers\Admin\Master\UserController');
        Route::get('/admin-karyawan', [App\Http\Controllers\Admin\Master\KaryawanController::class, 'index'])->name('admin.karyawan');
        Route::get('/admin-karyawan-tambah', [App\Http\Controllers\Admin\Master\KaryawanController::class, 'create'])->name('admin.karyawan-tambah');
        Route::post('/admin-karyawan-store', [App\Http\Controllers\Admin\Master\KaryawanController::class, 'store'])->name('admin.karyawan-store');
        Route::get('/admin-karyawan-edit/{id?}', [App\Http\Controllers\Admin\Master\KaryawanController::class, 'edit'])->name('admin.karyawan-edit');
        Route::put('/admin-karyawan-update/{id?}', [App\Http\Controllers\Admin\Master\KaryawanController::class, 'update'])->name('admin.karyawan-update');
        Route::resource('admin-user', 'App\Http\Controllers\Admin\Master\UserController');
        Route::resource('admin-divisi', 'App\Http\Controllers\Admin\Master\DivisiController');
        Route::resource('admin-jabatan', 'App\Http\Controllers\Admin\Master\JabatanController');
    });

Route::middleware(['auth', 'cabang'])
    ->group(function () {
        Route::get('/cabang', [App\Http\Controllers\Cabang\DashboardController::class, 'index'])->name('cabang.dashboard');
        Route::resource('cabang-user', 'App\Http\Controllers\Cabang\Master\UserController');
        Route::get('/cabang-karyawan', [App\Http\Controllers\Cabang\Master\KaryawanController::class, 'index'])->name('cabang.karyawan');
        Route::get('/cabang-karyawan-tambah', [App\Http\Controllers\Cabang\Master\KaryawanController::class, 'create'])->name('cabang.karyawan-tambah');
        Route::post('/cabang-karyawan-store', [App\Http\Controllers\Cabang\Master\KaryawanController::class, 'store'])->name('cabang.karyawan-store');
        Route::get('/cabang-karyawan-edit/{id?}', [App\Http\Controllers\Cabang\Master\KaryawanController::class, 'edit'])->name('cabang.karyawan-edit');
        Route::put('/cabang-karyawan-update/{id?}', [App\Http\Controllers\Cabang\Master\KaryawanController::class, 'update'])->name('cabang.karyawan-update');
    });
