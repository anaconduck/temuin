<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/dashboard', function () {
    return view('layouts.home');
});

Route::get('/items', [BarangController::class,'index']
)->middleware(['auth'])->name('items');

Route::get('/tambah', [BarangController::class,'create']
)->middleware(['auth'])->name('tambah');

Route::post('/tambah', [BarangController::class,'store']
)->middleware(['auth'])->name('tambah');


Route::get('/items/{id}', [BarangController::class,'destroy']
);

Route::get('/riwayat', [BarangController::class,'index2']
);

Route::get('/modifikasi/{id}', [BarangController::class,'show']
);

Route::post('/modifikasi/{id}', [BarangController::class,'update']
);

Route::get('/terimakasih', function () {
    return view('layouts.tes');
});

Route::get('/Terms & Conditions', function () {
    return view('layouts.term');
});

Route::get('/PrivacyPolicy', function () {
    return view('layouts.privacy');
});

Route::get('/ReturnPolicy', function () {
    return view('layouts.return');
});

require __DIR__.'/auth.php';
