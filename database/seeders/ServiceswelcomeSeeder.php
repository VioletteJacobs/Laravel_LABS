<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceswelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("serviceswelcomes")->insert([
            [
                "icon" => "flaticon-023-flask",
                "title" => "Get in the lab !",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-011-compass",
                "title" => "Projects Online",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-037-idea",
                "title" => "Smart Marketing",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-039-vector",
                "title" => "Social Media",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-036-brainstorming",
                "title" => "Brainstorming",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-018-laptop-1",
                "title" => "Responsive",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-043-sketch",
                "title" => "Retina ready",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "icon" => "flaticon-012-cube",
                "title" => "Service-text",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
        ]);
    }
}
