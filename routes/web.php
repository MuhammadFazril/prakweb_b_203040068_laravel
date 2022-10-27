<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Muhammad Fazril",
        "email" => "203040068@mail.unpas.ac.id",
        "image" => "fazril.jpg"
    ]);
});

// Route::get('/blog', function () {
//     $blog_post = [
//     ];

Route::get('/posts', [PostController::class], 'index');
// halaman single post
Route::get('post/{post:slug}', [PostController::class, 'show']);