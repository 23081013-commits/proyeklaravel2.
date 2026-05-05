<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiControllerDinda;
use App\Http\Controllers\AkademikControllerDinda;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai', [NilaiControllerDinda::class, 'index']);
Route::get('/kurikulum', [AkademikControllerDinda::class, 'kurikulum']);
Route::get('/kelas', [AkademikControllerDinda::class, 'kelas']);
Route::get('/jadwal', [AkademikControllerDinda::class, 'jadwal']);