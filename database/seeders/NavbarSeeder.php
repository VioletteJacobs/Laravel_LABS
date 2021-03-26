<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                "content" => "Home",
                "url" => "/"
            ],
            [
                "content" => "Services",
                "url" => "/services"
            ],
            [
                "content" => "Blog",
                "url" => "/blog"
            ],
            [
                "content" => "Contact",
                "url" => "/contact"
            ],
        ]);
    }
}
