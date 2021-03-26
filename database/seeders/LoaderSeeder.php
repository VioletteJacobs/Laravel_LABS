<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("loaders")->insert([
            [
                "img" => "img/logo.png",
                "title" => "Loading....."
            ],
        ]);
    }
}
