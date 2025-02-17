<?php

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

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
 });
 

Route::get('/world', function () {
    return 'World';
     
});

Route::get('/world', function () {
    return 'Selamat Datang';
     
});

Route::get('/about', function () {
    return '2341760142, Nadyne Rosalia Noer Azizah';  
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama Saya '.$name;
});

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class,'hello']);

use App\Http\Controllers\PageController;
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);

use App\Http\Controllers\HomeController;
Route::get('/', [PageController::class,'index']);

use App\Http\Controllers\AboutController;
Route::get('/about', [PageController::class,'about']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', [PageController::class,'articles']);
