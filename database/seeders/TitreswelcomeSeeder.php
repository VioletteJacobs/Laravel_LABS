<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreswelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titreswelcomes")->insert([
            [
                "title" => "Get in the Lab and discover the world",
            ],
            [
                "title" => "What our client said about us",
            ],
            [
                "title" => "Get in the Lab and see the services",
            ],
            [
                "title" => "Get in the Lab and meet the team",
            ],
        ]);
    }
}
