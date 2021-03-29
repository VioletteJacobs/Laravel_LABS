<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroblogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("introblogs")->insert([
            [
                "home" =>"Home",
                "title" => "Blog",
                "home_href" => "/",
                "blog" => "Blog",
            ]
        ]);
    }
}
