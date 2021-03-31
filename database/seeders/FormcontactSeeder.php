<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormcontactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formcontacts")->insert([
            [
                "name" => "name",
                "subject_id" => 1,
                "email" => "email",
                "message" => "message",
            ]
        ]);
    }
}
