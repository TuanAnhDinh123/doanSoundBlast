<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;
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
    return view('layouts.index');
});
Route::get('/ca-nhan', [queryController::class,'myMysic']);
Route::get('/trending', [queryController::class,'trending']);
Route::get('/nhac-moi', [queryController::class,'musicNew']);
Route::get('/top-nghe-si', [queryController::class,'musician']);
Route::get('/the-loai', [queryController::class,'category']);
Route::get('/search', [queryController::class,'search'])->name('search');
Route::get('/top-search', [queryController::class,'topSearch']);
Route::get('/chart', [queryController::class,'chart']);
Route::get('/detail/{id}', [queryController::class,'detail'])->name('detail');
Route::get('/homepage', [queryController::class,'homepage']);