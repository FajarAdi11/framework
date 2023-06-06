<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/student/add', [MahasiswaController::class, 'create'])->name('add');
Route::post('/student/add', [MahasiswaController::class, 'store'])->name('mahasiswa.add');

Route::get('/student/edit/{nim}', [MahasiswaController::class, 'getEdit'])->name('edit');
Route::post('/student/edit/{nim}', [MahasiswaController::class, 'postEdit'])->name('mahasiswa.edit');

Route::post('/student/delete/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
