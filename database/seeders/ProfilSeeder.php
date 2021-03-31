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
            // [
            //     "name" => "admin",
            //     "firstname" => "admin",
            //     "email" => "a@a",
            //     "age" => 24,
            //     "fonction_id" =>1,
            //     "password" => Hash::make("password"),
            //     "role_id" => 1,
            //     "photo" => "public/img/team/01.jpeg"
            // ],
            [
                "name" => "Jouran",
                "firstname" => "Elisa",
                "email" => "w@w",
                "fonction_id" => 2,
                "password" => Hash::make("password"),
                "role_id" => 2,
                "photo" => "/team/01.jpeg"
            ],
            [
                "name" => "thyji",
                "firstname" => "Sara",
                "email" => "p@p",
                "fonction_id" => 3,
                "password" => Hash::make("password"),
                "role_id" => 3,
                "photo" => "/team/01.jpeg"
            ],
            [
                "name" => "Brade",
                "firstname" => "Emma",
                "email" => "e@e",
                "fonction_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 3,
                "photo" => "/team/01.jpeg"
            ],
            [
                "name" => "Brade",
                "firstname" => "Laura",
                "email" => "l@l",
                "fonction_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 3,
                "photo" => "/team/01.jpeg"
            ],
        ]);
    }
}
