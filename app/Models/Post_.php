<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Title Post",
            "slug" => "first-title-post",
            "author" => "Zubir Salahid",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quis ratione et illum consequuntur nostrum recusandae dolore veniam eveniet. Assumenda provident, totam aperiam corrupti maiores reiciendis, cumque doloribus, animi saepe perspiciatis voluptate? Quam consectetur et blanditiis beatae animi minima eos ipsa eligendi quia omnis unde magni ut, earum, magnam iure alias id consequatur necessitatibus dicta praesentium placeat incidunt fugiat qui nihil. Nisi ab repellat totam earum doloremque, ullam esse consequatur officiis exercitationem sed rem numquam, animi perspiciatis. Exercitationem soluta, ducimus perferendis labore dolor numquam, quasi laudantium similique fuga voluptate minus? Laboriosam, consequuntur incidunt! Reprehenderit, quas! Voluptatibus dolore atque consectetur numquam quasi blanditiis, nam accusamus repellat consequatur labore quia voluptatem eligendi quidem fugiat odio voluptate minima laudantium repellendus saepe, omnis magnam aut deserunt"
        ],
        [
            "title" => "Second Title Post",
            "slug" => "second-title-post",
            "author" => "Zulkarnain Hasan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quis ratione et illum consequuntur nostrum recusandae dolore veniam eveniet. Assumenda provident, totam aperiam corrupti maiores reiciendis, cumque doloribus, animi saepe perspiciatis voluptate? Quam consectetur et blanditiis beatae animi minima eos ipsa eligendi quia omnis unde magni ut, earum, magnam iure alias id consequatur necessitatibus dicta praesentium placeat incidunt fugiat qui nihil. Nisi ab repellat totam earum doloremque, ullam esse consequatur officiis exercitationem sed rem numquam, animi perspiciatis. Exercitationem soluta, ducimus perferendis labore dolor numquam, quasi laudantium similique fuga voluptate minus? Laboriosam, consequuntur incidunt! Reprehenderit, quas! Voluptatibus dolore atque consectetur numquam quasi blanditiis, nam accusamus repellat consequatur labore quia voluptatem eligendi quidem fugiat odio voluptate minima laudantium repellendus saepe, omnis magnam aut deserunt. numquam quasi blanditiis, nam accusamus repellat consequatur labore quia voluptatem eligendi quidem fugiat odio voluptate minima laudantium repellendus saepe, omnis magnam aut deserunt."
        ]
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
