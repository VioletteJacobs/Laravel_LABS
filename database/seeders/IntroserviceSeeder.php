<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("introservices")->insert([
            [
                "home" =>"Home",
                "home_href" => "/",


            ],
        ]);
    }
}
