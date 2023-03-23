<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PrintController;

use App\Models\Surat;

/* 
|--------------------------------------------------------------------------
| Web Routes Aplikasi Surat
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

// access denied
Route::get('/access-denied', function () {
    return view('403');
})->name('access-denied');

Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

// Prevent logout with url
Route::get('/logout', function () {
    return view('404'); 
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('surat', SuratController::class);

    Route::get('/arsip-surat', function () {

        $surats = Surat::latest()->get();

        return view('dashboard.kepala-desa.arsip-surat', compact('surats'));

    })->name('arsip-surat');

    Route::get('/print-surat/{surat}', [PrintController::class, 'print'])->name('print-surat');
    
    Route::group(['middleware' => 'admin'], function () {
        Route::resource('penduduk', PendudukController::class);

        Route::resource('profil-desa', ProfilDesaController::class);

        Route::resource('dusun', DusunController::class);

        Route::resource('rw', RwController::class);

        Route::resource('rt', RtController::class);


        Route::get('/get-penduduk-id/{id}', function ($id) {

            $data = Penduduk::find($id);

            return response()->json($data);

        })->name('getPendudukId');

    });
});

