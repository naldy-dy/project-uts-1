<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[IndexController:: class, 'showIndex']);
Route::get('konten',[IndexController:: class, 'showKonten']);

// Admin Template

Route::get('template', function () {
    return view('admin.template.base');
});

Route::get('beranda',[HomeController:: class, 'showBeranda']);
Route::get('kategori',[HomeController:: class, 'showKategori']);



// Blog Controller
Route::get('blog',[BlogController:: class, 'indexBlog']);
Route::get('blog/{create}',[BlogController:: class, 'createBlog']);
Route::post('blog',[BlogController:: class, 'storeBlog']);
Route::get('blog/{blog}', [BlogController::class, 'showBlog']);

// Kategori COntroller
Route::get('kategori',[KategoriController:: class, 'indexKategori']);
Route::get('kategori/{create}',[KategoriController:: class, 'createKategori']);
Route::post('kategori',[KategoriController:: class, 'storeKategori']);