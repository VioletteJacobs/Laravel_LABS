<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardwelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cardwelcomes")->insert([
            [
                "icone" => "flaticon-023-flask",
                "title" => "Get in the lab",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icone" => "flaticon-011-compass",
                "title" => "Projects online",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icone" => "flaticon-037-idea",
                "title" => "SMART MARKETING",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
        ]);
    }
}
