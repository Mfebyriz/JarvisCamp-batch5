<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

/**
 * HTTP Methods:
 * 1. Get: untuk menampilkan sesuatu
 * 2. Post: untuk menampilkan data
 * 3. Put: untuk mengubah data
 * 4. Delete: untuk menghapus data
 */

//Route untuk menampilkan halaman data tugas
Route::get('/task', [TaskController::class, 'index']);


//Route untuk menampilkan halaman detail data tugas
Route::get('/task/{id}', [TaskController::class, 'detail']);
