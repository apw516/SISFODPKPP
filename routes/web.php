<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiteplanController;
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
Route::get('/', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('/login');
Route::get('register', [AuthController::class, 'index_register'])->middleware('guest')->name('register');
Route::post('register', [AuthController::class, 'Store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('permohonanrekom', [SiteplanController::class, 'index'])->middleware('auth')->name('permohonanrekom');
Route::post('ambilpage2', [SiteplanController::class, 'ambilpage2'])->middleware('auth')->name('ambilpage2');
Route::post('ambilpage1', [SiteplanController::class, 'ambilpage1'])->middleware('auth')->name('ambilpage1');
Route::post('ambildetailpermohonan', [SiteplanController::class, 'ambildetailpermohonan'])->middleware('auth')->name('ambildetailpermohonan');
Route::post('formupload', [SiteplanController::class, 'formupload'])->middleware('auth')->name('formupload');
Route::post('formkonfirmasi', [SiteplanController::class, 'formkonfirmasi'])->middleware('auth')->name('formkonfirmasi');
Route::post('formkonfirmasi2', [SiteplanController::class, 'formkonfirmasi2'])->middleware('auth')->name('formkonfirmasi2');
Route::post('kirimkonfirmasi', [SiteplanController::class, 'kirimkonfirmasi'])->middleware('auth')->name('kirimkonfirmasi');
Route::post('uploadberkasnya', [SiteplanController::class, 'simpanberkas'])->middleware('auth')->name('uploadberkasnya');
Route::post('simpanform', [SiteplanController::class, 'simpanform'])->middleware('auth')->name('simpanform');
Route::post('ceknotif', [SiteplanController::class, 'ceknotif'])->middleware('auth')->name('ceknotif');
Route::post('simpanfilegambar', [SiteplanController::class, 'simpanfilegambar'])->middleware('auth')->name('simpanfilegambar');
Route::post('ambilform_upload', [SiteplanController::class, 'ambilform_upload'])->middleware('auth')->name('ambilform_upload');
Route::post('viewfile', [SiteplanController::class, 'viewfile'])->middleware('auth')->name('viewfile');
Route::post('ambilberkas', [SiteplanController::class, 'ambilberkas'])->middleware('auth')->name('ambilberkas');
Route::get('download/{id}', [SiteplanController::class, 'downloadberkas'])->middleware('auth')->name('downloadberkas');

Route::get('profil', [ProfilController::class, 'index'])->middleware('auth')->name('profil');
