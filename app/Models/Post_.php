<?php

namespace App\Models;

class Post
{

    private  static $blog_post = [
        [

            'title' => "Lorem Satu",
            'slug' => 'lorem-satu',
            'author'   => "Lorem, ipsum.",
            'body' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, iste officiis? Fuga pariatur earum unde deleniti! Magnam perferendis, enim saepe ducimus dignissimos iure modi quas nostrum eos! Assumenda est excepturi similique nam optio, dolor odit, voluptatum hic modi delectus neque! Eligendi modi laboriosam dolorem accusantium quisquam earum dolore laudantium asperiores. Distinctio aperiam suscipit dolorum totam animi atque dolorem est optio debitis maxime possimus nobis dolore doloribus explicabo, impedit voluptatum iste nulla? Blanditiis aut officia unde quaerat cupiditate fuga distinctio ipsam quidem corporis suscipit earum, accusantium libero quas! Eveniet numquam fugiat animi corporis voluptas quibusdam, aliquid dolores sunt, cum voluptatum delectus!"

        ],
        [
            'title' => "Lorem Dua",
            'slug' => 'lorem-dua',
            'author'   => "Lorem, ipsum.",
            'body' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, iste officiis? Fuga pariatur earum unde deleniti! Magnam perferendis, enim saepe ducimus dignissimos iure modi quas nostrum eos! Assumenda est excepturi similique nam optio, dolor odit, voluptatum hic modi delectus neque! Eligendi modi laboriosam dolorem accusantium quisquam earum dolore laudantium asperiores. Distinctio aperiam suscipit dolorum totam animi atque dolorem est optio debitis maxime possimus nobis dolore doloribus explicabo, impedit voluptatum iste nulla? Blanditiis aut officia unde quaerat cupiditate fuga distinctio ipsam quidem corporis suscipit earum, accusantium libero quas! Eveniet numquam fugiat animi corporis voluptas quibusdam, aliquid dolores sunt, cum voluptatum delectus!"

        ],
        [
            'title' => "Lorem Tiga",
            'slug' => 'lorem-tiga',
            'author'   => "Lorem, ipsum.",
            'body' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, iste officiis? Fuga pariatur earum unde deleniti! Magnam perferendis, enim saepe ducimus dignissimos iure modi quas nostrum eos! Assumenda est excepturi similique nam optio, dolor odit, voluptatum hic modi delectus neque! Eligendi modi laboriosam dolorem accusantium quisquam earum dolore laudantium asperiores. Distinctio aperiam suscipit dolorum totam animi atque dolorem est optio debitis maxime possimus nobis dolore doloribus explicabo, impedit voluptatum iste nulla? Blanditiis aut officia unde quaerat cupiditate fuga distinctio ipsam quidem corporis suscipit earum, accusantium libero quas! Eveniet numquam fugiat animi corporis voluptas quibusdam, aliquid dolores sunt, cum voluptatum delectus!"

        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
