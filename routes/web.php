<?php

use App\Http\Controllers\AuthMahasiswaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('login-mahasiswa');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::group(['prefix'=>'/mahasiswa'], function () {
    Route::get('/login/mahasiswa', [AuthMahasiswaController::class, 'login']);
    Route::post('/login/action', [AuthMahasiswaController::class, 'doLogin1'])->name('mahasiswa-login');
});

Route::group(['prefix'=>'/dosen'], function () {
    Route::get('login/dosen', [AuthDosenController::class, 'login']);
    Route::post('login/action', [AuthDosenController::class, 'doLogin'])->name('dosen-login');
});