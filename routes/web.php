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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Muhammad Fazril",
        "email" => "arielff54@gmail.com",
        "image" => "fazril.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fazril",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, et magnam laboriosam totam sapiente ipsam dolores saepe veniam cum vitae! Iste numquam vero odit totam quia eveniet sint, dicta nobis neque minus temporibus sunt natus obcaecati suscipit sed reiciendis hic illo ducimus corrupti harum delectus cum ad porro quis. Dolor quam illo nam ipsam alias laboriosam a eos accusamus, dolore unde dolores eveniet labore similique exercitationem quaerat sequi aliquam eum molestias nisi repellendus minima quo. Voluptatum sapiente aperiam eius. Minus."
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alia Azzahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dicta deleniti iure aliquid natus sapiente cupiditate laborum quas! Est eum magni similique nostrum aliquid doloribus aut rem? Non, quam praesentium maiores ea recusandae quia exercitationem assumenda eos necessitatibus molestiae dolore iusto quaerat, explicabo architecto incidunt! Quo expedita dolores tempore nesciunt aspernatur molestiae enim temporibus mollitia beatae, fuga, ratione ex architecto quae harum facere officia quam tempora optio, minus molestias. Cumque totam, quis non quod aperiam harum beatae natus dolores eius. Iste dolor harum quo? Doloremque fuga mollitia magnam atque dolor quaerat cum. Tenetur voluptate fugit at suscipit laboriosam explicabo magni."
        ],
    ];

    return view('post', [
        "title" => "Post",
        "posts" => $blog_post
    ]);
});


// halaman single post
Route::get('post/{slug}', function($slug) {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fazril",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, et magnam laboriosam totam sapiente ipsam dolores saepe veniam cum vitae! Iste numquam vero odit totam quia eveniet sint, dicta nobis neque minus temporibus sunt natus obcaecati suscipit sed reiciendis hic illo ducimus corrupti harum delectus cum ad porro quis. Dolor quam illo nam ipsam alias laboriosam a eos accusamus, dolore unde dolores eveniet labore similique exercitationem quaerat sequi aliquam eum molestias nisi repellendus minima quo. Voluptatum sapiente aperiam eius. Minus."
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alia Azzahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dicta deleniti iure aliquid natus sapiente cupiditate laborum quas! Est eum magni similique nostrum aliquid doloribus aut rem? Non, quam praesentium maiores ea recusandae quia exercitationem assumenda eos necessitatibus molestiae dolore iusto quaerat, explicabo architecto incidunt! Quo expedita dolores tempore nesciunt aspernatur molestiae enim temporibus mollitia beatae, fuga, ratione ex architecto quae harum facere officia quam tempora optio, minus molestias. Cumque totam, quis non quod aperiam harum beatae natus dolores eius. Iste dolor harum quo? Doloremque fuga mollitia magnam atque dolor quaerat cum. Tenetur voluptate fugit at suscipit laboriosam explicabo magni."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [ 
        "title" => "Single Post",
        "post" => $new_post
    ]);
});