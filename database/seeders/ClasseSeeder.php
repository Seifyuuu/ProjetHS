<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                "name"=>"Yoga For Climers",
                "coach"=>"Sathi Bhuiyan",
                "schedule"=>"10.00Am-05:00Pm",
                "img"=>"img/class/1.jpg"
            ],
            [
                "name"=>"Yoga For Climbers",
                "coach"=>"Sathi Bhuiyan",
                "schedule"=>"10.00Am-05:00Pm",
                "img"=>"img/class/2.jpg"
            ],
            [
                "name"=>"Yoga for Climbers",
                "coach"=>"Sathi Bhuiyan",
                "schedule"=>"10.00Am-05:00Pm",
                "img"=>"img/class/3.jpg"
            ],
        ]);
    }
}
