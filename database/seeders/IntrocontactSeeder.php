<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntrocontactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("introcontacts")->insert([
            [
                "home" =>"Home",
                "title" => "Contact",
                "home_href" => "/",
                "service" => "Contact",
            ]
        ]);
    }
}
