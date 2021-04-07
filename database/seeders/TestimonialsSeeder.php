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
                "photo" => "03.jpg",
                "name" => "Smith",
                "firstname" => "Michael",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "5.jpg",
                "name" => "Dupont",
                "firstname" => "Nicolas",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "6.jpeg",
                "name" => "Diaz",
                "firstname" => "Carlotta",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "7.jpeg",
                "name" => "Perez",
                "firstname" => "Andreas",
                "fonction" => "CEO Company",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "8.jpeg",
                "name" => "Smart",
                "firstname" => "Elise",
                "fonction" => "Designer",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "8.jpeg",
                "name" => "jacobs",
                "firstname" => "Violette",
                "fonction" => "Full-stack Dev",
            ],
            [
                "span" => "‘​‌‘​‌",
                "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "photo" => "03.jpg",
                "name" => "jacobs",
                "firstname" => "Violetta",
                "fonction" => "Full-stack Dev",
            ],
        ]);
    }
}
