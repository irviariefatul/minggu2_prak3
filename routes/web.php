<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
        echo "Program studi Manajemen Informatika merupakan jenjang studi DIII";
    });

    Route::get('/teknik-informatika', function(){
        echo "Program studi Teknik Informatika merupakan jenjang studi DIV";
    });
});

// Halaman News
Route::get('/news/{id}', function($id){
    return 'News dengan ID '.$id;
});

// Halaman Saran
Route::prefix('/sarana')->group(function(){
    Route::get('/perkantoran', function(){
        echo "Sarana Dalam Kategori Perkantoran";
    });

    Route::get('/laboratorium', function(){
        echo "Sarana Dalam Kategori Laboratorium";
    });

    Route::get('/kelas', function(){
        echo "Sarana Dalam Kategori Kelas";
    });

    Route::get('/lainnya', function(){
        echo "Sarana Lainnya...";
    });
});

// Halalam About Us
Route::get('/about-us', [PageController::class,'about']);

//Halaman Comment
Route::get('/komen/{pesan}/{nama?}', function($pesan, $nama='Anonim'){
    return 'Comment Oleh '.$nama.' : '.$pesan;
});
