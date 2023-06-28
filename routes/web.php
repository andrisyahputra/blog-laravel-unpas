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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data['title'] = "Home";
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        "nama" => "Andri Syahputra",
        "email" => "andrisyahputra2209@gmail.com",
        "gambar" => "saya.jpg"
    ];
    $data['title'] = "About";
    return view('about', $data);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);
