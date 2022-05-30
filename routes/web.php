<?php

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
        "name" => "Canggih WR",
        "nick" => "Slump",
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/blog', function () {
    $data = [
        [
            "title" => "First UP",
            "author" => "cwr",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque magnam eligendi consequuntur, quia tempora, asperiores alias libero ab tempore corporis neque magni sint est aliquam illo optio veniam excepturi natus. Debitis exercitationem consequuntur praesentium, voluptatibus vero laborum suscipit, ad quo, deleniti eius doloribus aspernatur quis corrupti iusto reiciendis impedit officiis aut cumque? Doloremque, laboriosam! Et voluptate perferendis aliquam quas fugiat dicta molestias, perspiciatis tenetur atque culpa soluta eaque nostrum error laborum beatae consequatur exercitationem officiis similique omnis voluptas accusantium suscipit ea facere voluptatem! Veritatis excepturi dolor laborum sapiente dolorum."
        ],
        [
            "title" => "2nd UP",
            "author" => "cwr",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque magnam eligendi consequuntur, quia tempora, asperiores alias libero ab tempore corporis neque magni sint est aliquam illo optio veniam excepturi natus. Debitis exercitationem consequuntur praesentium, voluptatibus vero laborum suscipit, ad quo, deleniti eius doloribus aspernatur quis corrupti iusto reiciendis impedit officiis aut cumque? Doloremque, laboriosam! Et voluptate perferendis aliquam quas fugiat dicta molestias, perspiciatis tenetur atque culpa soluta eaque nostrum error laborum beatae consequatur exercitationem officiis similique omnis voluptas accusantium suscipit ea facere voluptatem! Veritatis excepturi dolor laborum sapiente dolorum."
        ],
    
    ];

    return view('blog', ["title" => "Blog", "data" => $data]);
});