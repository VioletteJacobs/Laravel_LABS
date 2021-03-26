<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("readies")->insert([
            [
                "title" => "Are you ready to stand out?",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
                "btn_content" => "browse",
                "btn_href" => "/services",
            ],
        ]);
    }
}
