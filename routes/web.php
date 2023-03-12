<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;
use App\Http\Controllers\authController;
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
    return redirect()->route('trending');
});
Route::get('/test', function () {
    return view('partials.login');
});
Route::get('/ca-nhan', [queryController::class,'myMusic']);
Route::get('/trending', [queryController::class,'trending'])->name('trending');
Route::get('/nhac-moi', [queryController::class,'musicNew']);
Route::get('/top-nghe-si', [queryController::class,'musician']);
Route::get('/the-loai', [queryController::class,'category']);
Route::get('/search', [queryController::class,'search'])->name('search');
Route::get('/top-search', [queryController::class,'topSearch']);
Route::get('/chart', [queryController::class,'chart']);
Route::get('/detail/{id}', [queryController::class,'detail'])->name('detail');
Route::get('/like/{id}/{number}', [queryController::class,'changeLike'])->name('like');
Route::get('/hear/{id}/{userID}', [queryController::class,'changeHear']);
Route::post('/cmt', [queryController::class,'addCmt']);
Route::post('/feedback-request', [queryController::class,'feedback']);

// login route
Route::get('/login', [authController::class,'login'])->name('login');
Route::get('/logout', [authController::class,'logout']);
Route::get('/register', [authController::class,'register']);
Route::post('/login-request', [authController::class,'validateUser']);
Route::post('/register-request', [authController::class,'registerUser']);
