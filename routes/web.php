<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\SubcriteriaController;
use App\Http\Controllers\SiswaRaController;
use App\Http\Controllers\SiswaSmkController;
use App\Http\Controllers\SiswaMaController;
use App\Http\Controllers\SiswaMtsController;
use App\Http\Controllers\SiswaSmaController;
use App\Http\Controllers\SiswaSmpController;

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('siswa-ra', SiswaRaController::class);
Route::resource('siswa-smk', SiswaSmkController::class);
Route::resource('siswa-ma', SiswaMaController::class);
Route::resource('siswa-mts', SiswaMtsController::class);
Route::resource('siswa-sma', SiswaSmaController::class);
Route::resource('siswa-smp', SiswaSmpController::class);

Route::match(['get', 'post'], 'form-ra', [HomeController::class, 'siswa_ra']);
Route::match(['get', 'post'], 'form-mts', [HomeController::class, 'siswa_mts']);
Route::match(['get', 'post'], 'form-smp', [HomeController::class, 'siswa_smp']);
Route::match(['get', 'post'], 'form-sma', [HomeController::class, 'siswa_sma']);
Route::match(['get', 'post'], 'form-smk', [HomeController::class, 'siswa_smk']);
Route::match(['get', 'post'], 'form-ma', [HomeController::class, 'siswa_ma']);
