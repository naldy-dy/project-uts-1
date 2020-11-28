<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Auth
Route::get('login',[AuthController:: class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi',[AuthController:: class, 'prosesRegistrasi']);

Route::get('logout',[AuthController:: class, 'logout']);


// user
Route::get('/',[IndexController:: class, 'showLokal']);
Route::get('index',[IndexController:: class, 'showIndex']);
Route::get('konten/{konten}', [IndexController:: class, 'showKonten']);
Route::post('konten', [IndexController:: class, 'komentar']);





// Admin Template
Route::get('beranda',[HomeController:: class, 'showBeranda']);
Route::get('kategori',[HomeController:: class, 'showKategori']);



// Blog Controller
Route::get('blog',[BlogController:: class, 'indexBlog']);
Route::get('blog/{create}',[BlogController:: class, 'createBlog']);
Route::post('blog',[BlogController:: class, 'storeBlog']);
Route::get('blog/{blog}/show', [BlogController:: class, 'showBlog']);
Route::get('blog/{blog}/edit', [BlogController::class, 'editBlog']);
Route::put('blog/{blog}', [BlogController::class, 'updateBlog']);
Route::delete('blog/{blog}', [BlogController::class, 'destroy']);



// Kategori COntroller
Route::get('kategori',[KategoriController:: class, 'indexKategori']);
Route::get('kategori/{create}',[KategoriController:: class, 'createKategori']);
Route::post('kategori',[KategoriController:: class, 'storeKategori']);

Route::get('kategori/{kategori}/show', [kategoriController:: class, 'showkategori']);
Route::delete('kategori/{kategori}', [kategoriController::class, 'destroy']);