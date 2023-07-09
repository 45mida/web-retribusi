<?php

use App\Models\Tim;
use App\Models\Kelola;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\STSController;
use App\Http\Controllers\SKRDController;
use App\Http\Controllers\AjuanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTimController;
use App\Http\Controllers\DashboardTarifController;
use App\Http\Controllers\DashboardKelolaController;
use App\Http\Controllers\DashboardProfilController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardKelolaUserController;
use App\Http\Controllers\DashboardKelolaAjuanController;

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
    return view('beranda', [
        'kelola' => Kelola::all()
    ]);
});

Route::get('/tentang', [JenisController::class, 'index']);

Route::get('/tarif', [TarifController::class, 'index']);

// Route::get('/retribusi-usaha', [RetUsahaController::class, 'index']);
// Route::get('/retribusi-izin', [RetIzinController::class, 'index']);
// Route::get('/retribusi-umum', [RetUmumController::class, 'index']);

Route::get('/kelola', [KelolaController::class, 'index']);

Route::get('/tim', function () {
    return view('tim', [
        'tim' => Tim::all()
    ]);
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/pesan', [AjuanController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Route::resource('/dashboard/profil', DashboardProfilController::class)->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('profil', 'DashboardProfilController@edit')->name('dashboard.profil.edit');

    Route::patch('profil', 'App\Http\Controllers\DashboardProfilController@update')->name('dashboard.profil.update');
});
Route::resource('/dashboard/spord', DashboardKelolaAjuanController::class)->middleware('auth');
Route::resource('/dashboard/skrd', SKRDController::class)->middleware('auth');
Route::resource('/dashboard/sts', STSController::class)->middleware('auth');

Route::resource('/dashboard/user', DashboardKelolaUserController::class)->middleware('admin');
Route::resource('/dashboard/dataspord', DashboardKelolaAjuanController::class)->middleware('admin');
Route::resource('/dashboard/kelola', DashboardKelolaController::class)->middleware('admin');
Route::resource('/dashboard/tim', DashboardTimController::class)->middleware('admin');
Route::resource('/dashboard/jenis', DashboardKategoriController::class)->middleware('admin');
Route::resource('/dashboard/tarif', DashboardTarifController::class)->middleware('admin');