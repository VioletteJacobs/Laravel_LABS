<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            [
                "name" => "Prem",
                "firstname" => "Antoine",
                "date" => "3 juillet 2021",
                "email" => "lkjh@lgbj",
                "photo" => "avatar/01.jpg",
                "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ipsa recusandae, distinctio tempora velit provident. Natus, accusantium deleniti reiciendis dicta et quis eius adipisci esse a, provident.",
                "post_id" => 1,
                "check" => 1
            ],
            [
                "name" => "Prem",
                "firstname" => "Marie",
                "date" => "3 juillet 2021",
                "email" => "lkjh@lgbj",
                "photo" => "avatar/02.jpg",
                "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ipsa recusandae, distinctio tempora velit provident. Natus, accusantium deleniti reiciendis dicta et quis eius adipisci esse a, provident.",
                "post_id" => 1,
                "check" => 1
            ],
            [
                "name" => "Prem",
                "firstname" => "Milla",
                "date" => "3 juillet 2021",
                "email" => "lkjh@lgbj",
                "photo" => "avatar/03.jpg",
                "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ipsa recusandae, distinctio tempora velit provident. Natus, accusantium deleniti reiciendis dicta et quis eius adipisci esse a, provident.",
                "post_id" => 2,
                "check" => 1
            ],
            [
                "name" => "Prem",
                "firstname" => "paul",
                "date" => "3 juillet 2021",
                "email" => "lkjh@lgbj",
                "photo" => "avatar/02.jpg",
                "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ipsa recusandae, distinctio tempora velit provident. Natus, accusantium deleniti reiciendis dicta et quis eius adipisci esse a, provident.",
                "post_id" => 2,
                "check" => 0
            ],


        ]);
    }
}
