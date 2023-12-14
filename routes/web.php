<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('admin.dashboard');
});

Route::get('/kriteria', function(){
    return view('admin.datakriteria');
});

Route::get('/subkriteria', function(){
    return view('admin.datasubkriteria');
});

Route::get('/alternatif', function(){
    return view('admin.dataalternatif');
});

Route::get('/penilaian', function(){
    return view('admin.datapenilaian');
});

Route::get('/perhitungan', function(){
    return view('admin.dataperhitungan');
});

Route::get('/hasilakhir', function(){
    return view('admin.datahasilakhir');
});

Route::get('/user', function(){
    return view('admin.datauser');
});