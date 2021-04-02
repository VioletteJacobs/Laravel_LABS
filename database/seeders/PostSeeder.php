<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert([
            [
                "src" => "blog-1.jpg",
                "day" => "03",
                "month" => "Nov 2017",
                "title" => "Just à Little Blog post ",
                "category_id" => 1,
                "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla corrupti dignissimos hic dolor. Soluta sequi animi minus ea, architecto facere dolores blanditiis voluptates dolorem?",
                "check" => 1,
                "user_id" =>1
            ],
            [
                "src" => "blog-2.jpg",
                "day" => "13",
                "month" => "Nov 2014",
                "title" => "6 way to become a web dev ",
                "category_id" => 2,
                "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla corrupti dignissimos hic dolor. Soluta sequi animi minus ea, architecto facere dolores blanditiis voluptates dolorem?",
                "check" => 1,
                "user_id" =>3
            ],
            [
                "src" => "blog-2.jpg",
                "day" => "15",
                "month" => "Nov 2017",
                "title" => "Just à Little Truelle post ",
                "category_id" => 3,
                "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla corrupti dignissimos hic dolor. Soluta sequi animi minus ea, architecto facere dolores blanditiis voluptates dolorem?",
                "check" => 1,
                "user_id" =>1
            ],
            [
                "src" => "blog-1.jpg",
                "day" => "23",
                "month" => "Nov 2017",
                "title" => "Just à Little Blog post ",
                "category_id" => 4,
                "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla corrupti dignissimos hic dolor. Soluta sequi animi minus ea, architecto facere dolores blanditiis voluptates dolorem?",
                "check" => 1,
                "user_id" =>2
            ],
        ]);
    }
}
