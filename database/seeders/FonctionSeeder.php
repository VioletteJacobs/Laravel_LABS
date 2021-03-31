<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("fonctions")->insert(
            [
                [
                    "fonction" => " Ceo"
                ],
                [
                    "fonction" => " Webmaster"
                ],
                [
                    "fonction" => " Java dev"
                ],
                [
                    "fonction" => " Publiciter"
                ],
                [
                    "fonction" => " Happyness manager"
                ],
                [
                    "fonction" => " Seller"
                ],
                [
                    "fonction" => " Secretary"
                ],

            ]
            );
    }
}
