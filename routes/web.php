<?php

use App\Http\Controllers\DataKriteriaController;
use App\Http\Controllers\DataSubKriteriaController;
use App\Http\Controllers\DataAlternatifController;
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

Route::controller(DataKriteriaController::class)->prefix('kriteria')->group(function(){
    Route::get('', 'datakriteria')->name('kriteria');
    Route::get('create', 'formkriteria')->name('kriteria.create');
    Route::post('create', 'simpan')->name('kriteria.create.simpan');
    Route::get('editdata/{id}', 'editdata')->name('kriteria.editdata');
    Route::post('editdata/{id}', 'updatedata')->name('kriteria.create.updatedata');
    Route::get('deletdata/{id}', 'deletdata')->name('kriteria.deletdata');
});

Route::controller(DataSubKriteriaController::class)->prefix('subkriteria')->group(function(){
    Route::get('', 'datasubkriteria')->name('subkriteria');
    Route::get('create', 'formsubkriteria')->name('subkriteria.create');
    Route::post('create', 'simpan')->name('subkriteria.create.simpan');
    Route::get('editdata/{id}', 'editdata')->name('subkriteria.editdata');
    Route::post('editdata/{id}', 'updatedata')->name('subkriteria.create.updatedata');
    Route::get('deletdata/{id}', 'deletdata')->name('subkriteria.deletdata');
});


Route::controller(DataAlternatifController::class)->prefix('alternatif')->group(function(){
    Route::get('', 'dataalternatif')->name('alternatif');
    Route::get('create', 'formalternatif')->name('alternatif.create');
    Route::post('create', 'simpan')->name('alternatif.create.simpan');
    Route::get('editdata/{id}', 'editdata')->name('alternatif.editdata');
    Route::post('editdata/{id}', 'updatedata')->name('alternatif.create.updatedata');
    Route::get('deletdata/{id}', 'deletdata')->name('alternatif.deletdata');
});
