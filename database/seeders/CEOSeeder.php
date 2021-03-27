<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ceos")->insert([
            [
                "photo" => "img/team/2.jpg",
                "name" => "Gonzalez",
                "firstname" => "Elisa",
                "fonction" => "CEO",
            ],
        ]);
    }
}
