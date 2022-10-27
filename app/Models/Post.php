<?php 

namespace App\Models;

class Post
{
 private static $blog_posts = 
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
];

public static function all()
  {
   return self::$blog_posts;
  }

public static function find($slug)
  {
    $posts = self::$blog_posts;
      $post = [];
        foreach($posts as $p) {
          if($p["slug"] === $slug) {
              $post = $p;
          }
      }
      return $post;
  }

}