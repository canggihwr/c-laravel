<?php

namespace App\Models;


class Post
{
    private static $data = [
        [
            "title" => "First UP",
            "slug" => "blog/first-up",
            "author" => "cwr",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque magnam eligendi consequuntur, quia tempora, asperiores alias libero ab tempore corporis neque magni sint est aliquam illo optio veniam excepturi natus. Debitis exercitationem consequuntur praesentium, voluptatibus vero laborum suscipit, ad quo, deleniti eius doloribus aspernatur quis corrupti iusto reiciendis impedit officiis aut cumque? Doloremque, laboriosam! Et voluptate perferendis aliquam quas fugiat dicta molestias, perspiciatis tenetur atque culpa soluta eaque nostrum error laborum beatae consequatur exercitationem officiis similique omnis voluptas accusantium suscipit ea facere voluptatem! Veritatis excepturi dolor laborum sapiente dolorum."
        ],
        [
            "title" => "2nd UP",
            "slug" => "blog/2nd-up",
            "author" => "cwr",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque magnam eligendi consequuntur, quia tempora, asperiores alias libero ab tempore corporis neque magni sint est aliquam illo optio veniam excepturi natus. Debitis exercitationem consequuntur praesentium, voluptatibus vero laborum suscipit, ad quo, deleniti eius doloribus aspernatur quis corrupti iusto reiciendis impedit officiis aut cumque? Doloremque, laboriosam! Et voluptate perferendis aliquam quas fugiat dicta molestias, perspiciatis tenetur atque culpa soluta eaque nostrum error laborum beatae consequatur exercitationem officiis similique omnis voluptas accusantium suscipit ea facere voluptatem! Veritatis excepturi dolor laborum sapiente dolorum."
        ],
        
    ];

    public static function all(){
        return collect(self::$data);
    }

    public static function find($slug){
        $datas = static::all();

        // $data_post = [];
        $slug_add = "blog/";

        // foreach ($datas as $data2) {
        //     if ($data2["slug"] === $slug_add."".$slug) {
        //         $data_post = $data2;
        //     }
        // }

        return $datas -> firstWhere('slug', $slug_add."".$slug);

    }
}



