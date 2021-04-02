<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonials")->insert([
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "Smith",
                "firstname" => "Michael",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "Dupont",
                "firstname" => "Nicolas",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "Diaz",
                "firstname" => "Carlotta",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "Perez",
                "firstname" => "Andreas",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "Smart",
                "firstname" => "Elise",
                "fonction" => "Designer",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "01.jpg",
                "name" => "jacobs",
                "firstname" => "Violette",
                "fonction" => "Full-stack Dev",
            ],
        ]);
    }
}
