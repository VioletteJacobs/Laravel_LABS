<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tags")->insert([
            [
                "tag" => "Identity"
            ],
            [
                "tag" => "Branding"
            ],
            [
                "tag" => "Design"
            ],
            [
                "tag" => "Inspiration"
            ],
            [
                "tag" => "Video"
            ],
            [
                "tag" => "Web design"
            ],
            [
                "tag" => "Photography"
            ],

        ]);
    }
}
