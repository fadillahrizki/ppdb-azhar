<?php

use App\Models\SiswaSmk;
use App\Models\Whatsapp;
use App\Mail\SmkRegistration;
use App\Notifications\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaMaController;
use App\Http\Controllers\SiswaRaController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\SiswaMtsController;
use App\Http\Controllers\SiswaSmaController;
use App\Http\Controllers\SiswaSmkController;
use App\Http\Controllers\SiswaSmpController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\SubcriteriaController;

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

// Route::get('test-send',function(){
    // $siswa = SiswaSmk::find(1);
    // (new Whatsapp)->send("082369378823","Pendaftaran Siswa Berhasil");
    // Mail::to($siswa->siswa_email)->send(new SmkRegistration($siswa));
// });

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('siswa-ra-kelulusan', [SiswaRaController::class, 'kelulusan'])->middleware('auth')->name('siswa-ra.kelulusan');
Route::get('siswa-mts-kelulusan', [SiswaMtsController::class, 'kelulusan'])->middleware('auth')->name('siswa-mts.kelulusan');
Route::get('siswa-smp-kelulusan', [SiswaSmpController::class, 'kelulusan'])->middleware('auth')->name('siswa-smp.kelulusan');
Route::get('siswa-sma-kelulusan', [SiswaSmaController::class, 'kelulusan'])->middleware('auth')->name('siswa-sma.kelulusan');
Route::get('siswa-ma-kelulusan', [SiswaMaController::class, 'kelulusan'])->middleware('auth')->name('siswa-ma.kelulusan');
Route::get('siswa-smk-kelulusan', [SiswaSmkController::class, 'kelulusan'])->middleware('auth')->name('siswa-smk.kelulusan');

Route::post('siswa-ra-luluskan', [SiswaRaController::class, 'luluskan'])->middleware('auth')->name('siswa-ra.luluskan');
Route::post('siswa-mts-luluskan', [SiswaMtsController::class, 'luluskan'])->middleware('auth')->name('siswa-mts.luluskan');
Route::post('siswa-smp-luluskan', [SiswaSmpController::class, 'luluskan'])->middleware('auth')->name('siswa-smp.luluskan');
Route::post('siswa-sma-luluskan', [SiswaSmaController::class, 'luluskan'])->middleware('auth')->name('siswa-sma.luluskan');
Route::post('siswa-ma-luluskan', [SiswaMaController::class, 'luluskan'])->middleware('auth')->name('siswa-ma.luluskan');
Route::post('siswa-smk-luluskan', [SiswaSmkController::class, 'luluskan'])->middleware('auth')->name('siswa-smk.luluskan');

Route::resource('users', UserController::class)->middleware(['auth','role_or_permission:super admin']);
Route::resource('siswa-ra', SiswaRaController::class)->middleware('auth');
Route::resource('siswa-smk', SiswaSmkController::class)->middleware('auth');
Route::resource('siswa-ma', SiswaMaController::class)->middleware('auth');
Route::resource('siswa-mts', SiswaMtsController::class)->middleware('auth');
Route::resource('siswa-sma', SiswaSmaController::class)->middleware('auth');
Route::resource('siswa-smp', SiswaSmpController::class)->middleware('auth');

Route::match(['get', 'post'], 'form-ra', [HomeController::class, 'siswa_ra']);
Route::match(['get', 'post'], 'form-mts', [HomeController::class, 'siswa_mts']);
Route::match(['get', 'post'], 'form-smp', [HomeController::class, 'siswa_smp']);
Route::match(['get', 'post'], 'form-sma', [HomeController::class, 'siswa_sma']);
Route::match(['get', 'post'], 'form-smk', [HomeController::class, 'siswa_smk']);
Route::match(['get', 'post'], 'form-ma', [HomeController::class, 'siswa_ma']);

Route::get('download/{jenjang}/{id}', [HomeController::class, 'download'])->name('download');
Route::get('check/{jenjang}', [HomeController::class, 'check'])->name('check');
Route::get('thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::post('users/{user}/update-permission', [UserController::class, 'updatePermission'])->name('users.update-permission')->middleware(['auth','role_or_permission:super admin']);
