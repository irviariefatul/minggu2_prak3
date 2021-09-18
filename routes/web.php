<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SaranaController;
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

// Halaman Home
Route::get('/', [PageController::class,'index']);

// Halaman Program Studi
Route::prefix('/prodi')->group(function(){
    Route::get('/manajemen-informatika', function(){
        return view('mi');
    });

    Route::get('/teknik-informatika', function(){
        return view('ti');
    });
});

// Halaman News
Route::get('/news/{id}', [PageController::class,'news']);

// Halaman Saran
Route::prefix('/sarana')->group(function(){
    Route::get('/perkantoran', [SaranaController::class, 'perkantoran']);

    Route::get('/laboratorium', [SaranaController::class, 'laboratorium']);

    Route::get('/kelas', [SaranaController::class, 'kelas']);

    Route::get('/lainnya', [SaranaController::class, 'lainnya']);
});

// Halalam About Us
Route::get('/about-us', [PageController::class,'about']);

//Halaman Comment
Route::get('/komen/{pesan}/{nama?}', function($pesan, $nama ='Anonim'){
    return view('comment', ['nama' => $nama , 'pesan' => $pesan]);
});
