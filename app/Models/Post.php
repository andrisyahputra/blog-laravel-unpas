<?php

namespace App\Models;

class Post
{
    private static $posts = [
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

    public static function all(){
        return collect(self::$posts);
    }
    public static function find($slug){

        $posts = static::all();
    //     $post = [];
    // foreach ($posts as $item) {
    //     if($item["slug"] == $slug){
    //         $post = $item;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
    }
}
