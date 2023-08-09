<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Asyifa Maulana",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deleniti libero, sit adipisci amet molestiae voluptatibus dolore? Accusantium quia quis provident? Ipsam accusamus aperiam laudantium ut. Deserunt officiis, eius cum consectetur quia porro sit voluptatem hic assumenda doloribus possimus? Iste, reprehenderit dolores quasi aut praesentium, sunt facilis porro mollitia nulla possimus repellat minima et sint, ab labore! Omnis ducimus aliquam ratione amet soluta? Minus, minima ipsa. Obcaecati totam illo, dolore laborum quidem doloribus inventore! Repudiandae velit illum iste est quo."
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Maulana gofar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis officiis, vero amet nulla id reiciendis enim illo eos unde voluptatem eligendi facere hic deserunt. Qui, facere officiis cum ipsam, exercitationem suscipit unde ipsa molestias id voluptatibus autem placeat adipisci deleniti a quod dicta, earum inventore soluta commodi. Esse eligendi nobis sed delectus necessitatibus dolorum harum, molestiae, incidunt neque ducimus placeat exercitationem unde non magni, libero maxime ratione eveniet adipisci ipsam. Reiciendis cupiditate odit iusto quod veritatis omnis, odio ad sint."
    
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Jaki",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veritatis qui adipisci nulla ex corporis quidem magni aspernatur iusto? Explicabo quia nostrum velit sapiente distinctio veniam perspiciatis cupiditate consectetur culpa, iusto quisquam placeat esse magni architecto quo reiciendis, expedita tenetur."
    
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);   
    }
    
}
