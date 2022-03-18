<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Firgi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias libero repellat reiciendis obcaecati adipisci! Eligendi velit nam iusto eum, tenetur repellat, molestiae, dolores corporis vitae veniam nobis minima provident natus nihil! Provident, architecto magni quis saepe officiis, magnam perferendis accusantium non nisi cum animi praesentium numquam officia alias consequuntur at! Deserunt, id ipsa illum quis quo pariatur enim dolor iste suscipit. Blanditiis, ipsa sunt. Aliquid quam non ipsam dicta voluptatum, porro earum dolorum aliquam voluptatibus aspernatur dolor? Impedit, repellendus sit."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sotya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae saepe optio autem possimus cupiditate praesentium error maxime obcaecati vel, tenetur doloremque rerum distinctio voluptatum ratione repellat, ullam animi, esse quia."
        ]
        ];

    public static function all(){
        return collect(self::$blog_post);
    }
    
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
