<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("carrousels")->insert([
            [
                "url" => "01.jpg",
                "span" => "Get your freebie template now!",
            ],
            [
                "url" => "02.jpg",
                "span" => "Welcome in THE LAB! Have fun!",
            ],
            
        ]);
    }
}
