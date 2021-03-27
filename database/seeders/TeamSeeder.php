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
                "photo" => "img/team/1.jpg",
                "name" => "Willimas",
                "firstname" => "Christinne",
                "fonction" => "HappyNess Manager",
            ],
            [
                "photo" => "img/team/3.jpg",
                "name" => "Broder",
                "firstname" => "Pauline",
                "fonction" => "Full-stack web dev",
            ],
        ]);
    }
}
