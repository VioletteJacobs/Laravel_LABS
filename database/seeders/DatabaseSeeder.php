<?php

namespace Database\Seeders;


use App\Models\Subject;
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
            //authentification
            RoleSeeder::class,
            FonctionSeeder::class,
            ProfilSeeder::class,
            
            // all
            LoaderSeeder::class,
            NavbarSeeder::class,
            FooterSeeder::class,
            EmailcontactSeeder::class,
            NewsletterSeeder::class,
            IconSeeder::class,

            // contact
            AddressSeeder::class,
            PhoneSeeder::class,
            EmailSeeder::class,
            ContactsectionSeeder::class,
            SubjectSeeder::class,
            FormcontactSeeder::class,

            // blade welcome
            CarrouselSeeder::class,
            LogoSeeder::class,
            CardwelcomeSeeder::class,
            TitreswelcomeSeeder::class,
            AboutwelcomeSeeder::class,
            TestimonialsSeeder::class,
            TeamSeeder::class,


            // blade blog
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            PostTagSeeder::class,


            // blade services
            TitresserviceSeeder::class,
            IntroserviceSeeder::class,
            ServiceSeeder::class,


            // blade contact
            MapSeeder::class,

        ]);
    }
}
