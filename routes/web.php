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

Route::get('/blog', function () {
    $data['posts'] = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andri Syahputra",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non, aliquid placeat officia unde exercitationem nam eveniet, delectus eaque cum deserunt ratione. Ipsum, ea quo aspernatur, doloribus sint quos nostrum ratione quia inventore quaerat ex exercitationem reiciendis? Dolore dicta quod, illo dolorem assumenda, numquam architecto odio, iste iure nulla in."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bagus Setiawan",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non, aliquid placeat officia unde exercitationem nam eveniet, delectus eaque cum deserunt ratione."
        ],
    ];
    $data['title'] = "Blog";
    return view('blog', $data);
});

Route::get('posts/{slug}', function($slug){
    $posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andri Syahputra",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non, aliquid placeat officia unde exercitationem nam eveniet, delectus eaque cum deserunt ratione. Ipsum, ea quo aspernatur, doloribus sint quos nostrum ratione quia inventore quaerat ex exercitationem reiciendis? Dolore dicta quod, illo dolorem assumenda, numquam architecto odio, iste iure nulla in."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bagus Setiawan",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non, aliquid placeat officia unde exercitationem nam eveniet, delectus eaque cum deserunt ratione."
        ],
    ];
    $data["post"] = [];
    foreach ($posts as $item) {
        if($item["slug"] == $slug){
            $data["post"] = $item;
        }
    }

    $data['title'] = "Post";
    return view('post', $data);
});
