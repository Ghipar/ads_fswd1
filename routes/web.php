<?php

use Illuminate\Support\Facades\Auth;
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
// Route::get('/admin', [\App\Http\Controllers\AdminController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('/karyawan', [\App\Http\Controllers\KaryawanController::class, 'index']);
Route::get('/karyawan', [\App\Http\Controllers\KaryawanController::class, 'show']);
Route::get('/cuti', [\App\Http\Controllers\CutiController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//backend route
Route::post('/simpan-karyawan', [App\Http\Controllers\KaryawanController::class, 'store'])->name('simpan-karyawan');

