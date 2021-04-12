<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert([
            [
                "photo" => "1.jpg",
                "name" => "Willimas",
                "firstname" => "Christinne",
                "fonction" => "CEO",
            ],
            [
                "photo" => "5.jpeg",
                "name" => "Willimas",
                "firstname" => "Marie",
                "fonction" => "HappyNess Manager",
            ],
            [
                "photo" => "8.jpeg",
                "name" => "bros",
                "firstname" => "Rebecca",
                "fonction" => "Manager",
            ],
            [
                "photo" => "3.jpg",
                "name" => "Willimas",
                "firstname" => "Sophia",
                "fonction" => "HappyNess Manager",
            ],
            [
                "photo" => "4.jpeg",
                "name" => "Broder",
                "firstname" => "Pauline",
                "fonction" => "Full-stack web dev",
            ],
            [
                "photo" => "7.jpeg",
                "name" => "Cruz",
                "firstname" => "Alba",
                "fonction" => "Full-stack web dev",
            ],
        ]);
    }
}
