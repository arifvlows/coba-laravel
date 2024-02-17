<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Baron",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas totam error voluptates officia, repellat, sed culpa atque perferendis esse explicabo debitis distinctio illo itaque asperiores fugiat necessitatibus eligendi dolore. Aut quidem obcaecati dignissimos in tempore maiores eaque? Dignissimos ipsum possimus quia deleniti vero ea, rerum obcaecati iste quibusdam incidunt velit porro omnis iure unde exercitationem sed. Provident inventore enim est perferendis quisquam maiores consectetur nam dolor unde animi nulla, ullam eius esse vitae corrupti debitis quasi fuga tenetur rem dolore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Vlows",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor quidem, reiciendis quisquam unde explicabo at! Minima, dolores molestias optio hic commodi facilis omnis libero laudantium perspiciatis totam architecto suscipit necessitatibus dolore cupiditate accusamus incidunt veritatis maiores soluta eius ducimus laborum non odit consequuntur explicabo? Impedit veritatis, delectus voluptas tempore eligendi unde blanditiis dolores atque sed excepturi provident qui deserunt! Eos similique, placeat, ipsa animi error incidunt quaerat vitae sequi excepturi mollitia delectus, numquam deserunt beatae culpa quo debitis quam cupiditate eligendi assumenda optio suscipit. Aliquam molestias, cum impedit magni perspiciatis eveniet fugiat illo, dolorum rem sint hic nemo, consequuntur sit."
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            // $post = [];
            // foreach ($posts as $p) {
            //     if($p['slug'] === $slug) {
            //         $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);
        }
}
