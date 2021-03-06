<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "Jouran",
                "firstname" => "Elisa",
                "email" => "w@w",
                "fonction_id" => 2,
                "password" => Hash::make("password"),
                "role_id" => 2,
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "photo" => "1.jpg",
                "check" => 1
            ],
            [
                "name" => "thyji",
                "firstname" => "Sara",
                "email" => "p@p",
                "fonction_id" => 3,
                "password" => Hash::make("password"),
                "role_id" => 3,
                "photo" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "check" => 1
            ],
            [
                "name" => "Brade",
                "firstname" => "Emma",
                "email" => "e@e",
                "fonction_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 1,
                "photo" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "check" => 1
            ],
            [
                "name" => "Brade",
                "firstname" => "Laura",
                "email" => "l@l",
                "fonction_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "photo" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "check" => 1
            ],
            [
                "name" => "Brade",
                "firstname" => "Laura",
                "email" => "j@j",
                "fonction_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "photo" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "check" => 0
            ],
        ]);
    }
}
