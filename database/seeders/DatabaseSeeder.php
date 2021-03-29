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
            NewsletterSeeder::class,
            // contact
            AddressSeeder::class,
            PhoneSeeder::class,
            EmailSeeder::class,
            ContactsectionSeeder::class,
            // blade welcome
            CarrouselSeeder::class,
            LogoSeeder::class,
            CardwelcomeSeeder::class,
            TitreswelcomeSeeder::class,
            AboutwelcomeSeeder::class,
            TestimonialsSeeder::class,
            TeamSeeder::class,
            CEOSeeder::class,
            ReadySeeder::class,

            // blade blog
            IntroblogSeeder::class,


            // blade services
            TitresserviceSeeder::class,
            IntroserviceSeeder::class,
            ServiceSeeder::class,


            // blade contact
            IntrocontactSeeder::class,
            MapSeeder::class,
        ]);
    }
}
