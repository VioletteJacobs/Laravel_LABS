<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitresserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titresservices")->insert([
            [
                "title"=> "Get in the Lab and see the services"
            ],
            [
                "title"=> "Get in the Lab and discover the world"
            ],
        ]);
    }
}
