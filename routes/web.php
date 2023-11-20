<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Dasboard
Route::get('admin/dasbor', [\App\Http\Controllers\Admin\PageController::class, 'dasbor']);

// barang
Route::view('admin', 'layouts.admin.base');
Route::get('admin/barang', [\App\Http\Controllers\Admin\BarangController::class, 'index'])
    ->name('admin.barang.index');
Route::get('admin/barang/tambah', [\App\Http\Controllers\Admin\BarangController::class, 'create']);
Route::post('admin/barang', [\App\Http\Controllers\Admin\BarangController::class, 'store']);
Route::get('admin/barang/{id}/ubah', [\App\Http\Controllers\Admin\BarangController::class, 'edit']);
Route::put('admin/barang/{id}', [\App\Http\Controllers\Admin\BarangController::class, 'update']);
Route::delete('admin/barang/{id}', [\App\Http\Controllers\Admin\BarangController::class, 'destroy']);

// kategori barang
Route::prefix('admin/kategori-barang')
    ->name('admin.kategori-barang.')
    ->controller(\App\Http\Controllers\Admin\KategoriBarangController::class)
    ->middleware('auth')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('tambah', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('{id}/ubah', 'edit')->name('edit');
        Route::put('{id}', 'update')->name('update');
        Route::delete('{id}', 'desteoy')->name('destroy');
     });   
// login
Route::controller(\App\Http\Controllers\AuthController::class)
    ->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'proseslogin');
        Route::put('logout', 'logout');
    });
    