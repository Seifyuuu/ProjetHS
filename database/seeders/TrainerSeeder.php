<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            [
                "name"=>"John Do",
                "img"=>"img/trainer/trainer1.jpg",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
            [
                "name"=>"Ching Chong",
                "img"=>"img/trainer/trainer2.jpg",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
            [
                "name"=>"Akira Siyozaki",
                "img"=>"img/trainer/trainer3.jpg",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
        ]);
    }
}
