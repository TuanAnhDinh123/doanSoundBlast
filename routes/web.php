<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;
use App\Http\Controllers\authController;
use App\Http\Controllers\AdminController;
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

//admin route
Route::get('/admin', function () {
    return redirect()->route('listSong');
});
// cate
Route::get('/admin/add-cate', function(){
    return view('v_admin.add_cate');
});
Route::get('/admin/list-cate', [AdminController::class,'listcate']);
Route::get('/admin/delete-cate/{id}.html', [AdminController::class,'deletecate']);
Route::get('/admin/edit-cate/{id}.html', [AdminController::class,'editshowcate']);
Route::post('/admin/addcatepost', [AdminController::class,'addcate']);
Route::post('/admin/edit-cate/editcatepost', [AdminController::class,'editcate']);

// Artist
Route::get('/admin/add-artist', function(){
    return view('v_admin.add_artist');
});
Route::get('/admin/list-artist', [AdminController::class,'listArtist']);
Route::get('/admin/delete-artist/{id}.html', [AdminController::class,'deleteArtist']);
Route::get('/admin/edit-artist/{id}.html', [AdminController::class,'editShowArtist']);
Route::post('/admin/add-artist-post', [AdminController::class,'addArtist']);
Route::post('/admin/edit-artist/edit-artist-post', [AdminController::class,'editArtist']);

// Author
Route::get('/admin/add-author', function(){
    return view('v_admin.add_author');
});
Route::get('/admin/list-author', [AdminController::class,'listAuthor']);
Route::get('/admin/delete-author/{id}.html', [AdminController::class,'deleteAuthor']);
Route::get('/admin/edit-author/{id}.html', [AdminController::class,'editShowAuthor']);
Route::post('/admin/add-author-post', [AdminController::class,'addAuthor']);
Route::post('/admin/edit-author/edit-author-post', [AdminController::class,'editAuthor']);

//song
Route::get('/admin/add-song', function(){
    return view('v_admin.add_song');
});
Route::get('/admin/list-song', [AdminController::class,'listSong'])->name('listSong');
Route::get('/admin/delete-song/{id}.html', [AdminController::class,'deleteSong']);
Route::get('/admin/edit-song/{id}.html', [AdminController::class,'editshowSong']);
Route::post('/admin/addsongpost', [AdminController::class,'addSong']);
Route::post('/admin/edit-song/edit-song-post', [AdminController::class,'editSong']);