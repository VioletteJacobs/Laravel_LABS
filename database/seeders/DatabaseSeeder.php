<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // all
            LoaderSeeder::class,
            NavbarSeeder::class,
            FooterSeeder::class,
            // blade welcome
            CarrouselSeeder::class,
            LogoSeeder::class,
            CardwelcomeSeeder::class,
            TitreswelcomeSeeder::class,
            AboutwelcomeSeeder::class,
            TestimonialsSeeder::class,
            ServiceswelcomeSeeder::class,
            TeamSeeder::class,
            ReadySeeder::class,

            // blade blog


            // blade services


            // blade contact
        ]);
    }
}
