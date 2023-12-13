<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


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
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/search',[App\Http\Controllers\PostController::class,'search']);

Route::get('/',[App\Http\Controllers\PostController::class,'home']);
Route::get('/kesehatan',function () {
    return 'Bersihkan Paru Paru Akibat Paparan Polusi,ini Manfaat lain  Salt Therapy ';
});
Route::get('/hello',function () {
    echo '<h2 style="text-align: center"><u>Susu Murni</u></h2>';
});
Route::get('/guru',function () {
    return view('guru');
});
Route::get('/home',[PostController::class, 'home']);
Route::get('/siswa',function () {
    return view('siswa');
});

Route::get('/blog',function () {
    return view('blog');
});
Route::get('/tampil',[PostController::class, 'tampil']);

Route::get('/search',[PostController::class, 'search']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home2',[HomeController::class, 'index']);
    Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
});