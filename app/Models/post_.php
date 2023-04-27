<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Saepe at nesciunt laboriosam, aspernatur consequuntur Lorem ipsum dolor
          sit amet consectetur adipisicing elit. Saepe at nesciunt laboriosam, aspernatur
         consequuntur totam beatae dolor dolores, sint velit hic fugit possimus expedita? Beatae
          assumenda eos rem a cum.totam beatae dolor dolores,
          sint velit hic fugit possimus expedita? Beatae assumenda eos rem a cum.",
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Saepe at nesciunt laboriosam, aspernatur consequuntur Lorem ipsum dolor
          sit amet consectetur adipisicing elit. Saepe at nesciunt laboriosam, aspernatur
         consequuntur totam beatae dolor dolores, sint velit hic fugit possimus expedita? Beatae
          assumenda eos rem a cum.totam beatae dolor dolores,
          sint velit hic fugit possimus expedita? Beatae assumenda eos rem a cum.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
