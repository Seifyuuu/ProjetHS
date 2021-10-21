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
           RoleSeeder::class,
           UserSeeder::class,
           AboutSeeder::class,
           BackgroundSeeder::class,
           ClasseSeeder::class,
           EventSeeder::class,
           FooterSeeder::class,
           GallerySeeder::class,
           NavSeeder::class,
           PricingSeeder::class,
           ScheduleSeeder::class,
           TestimonialsSeeder::class,
           TitreSeeder::class,
           TrainerSeeder::class 
        ]);
    }
}
