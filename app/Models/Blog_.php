<?php

namespace App\Models;

class Blog
{
    private static $blog_posts = [
        [
            "title" => "Post Blog Pertama From Model",
            "slug" => "post-blog-pertama",
            "author" => "Dreamer Dream",
            "content" => "
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores aperiam mollitia corporis reprehenderit id optio perspiciatis odit accusantium illo molestias! Eligendi fugiat repudiandae, accusamus omnis dolore recusandae ipsa, asperiores adipisci doloremque iste nisi est inventore. Optio modi et, tenetur non fuga ea. Perferendis maiores excepturi repellendus recusandae dolores labore delectus."
        ],
        [
            "title" => "Post Blog Kedua From Model",
            "slug" => "post-blog-kedua",
            "author" => "Gakure",
            "content" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia incidunt minima necessitatibus est et distinctio. Voluptas, dolores id, dicta maiores ut consectetur deleniti nihil sunt tempora minus perspiciatis sapiente eveniet corporis voluptates iste quasi odio. Maxime rem eligendi nihil iste qui dolores, et facere ab corporis expedita voluptatibus deserunt labore rerum dolore? Ducimus porro et officia esse odio repellendus praesentium doloremque cupiditate dicta provident omnis deserunt nostrum laudantium eos saepe quae non quidem eligendi pariatur cum, eaque nesciunt, aliquam sed iure! Nam ab debitis, reiciendis vel quod minima perspiciatis obcaecati ratione nisi pariatur necessitatibus et fugiat incidunt vitae dolorum. Dolore."
        ]
    ];

    public function all(){
        return collect(self::$blog_posts);
    }

    public function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
