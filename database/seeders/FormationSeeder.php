<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('formation')->insert([
            'nom' => Str::random(15),
            'description' => Str::random(100),
            'image' => Str::random(15),
            'prix' => $faker->randomNumber(1),
            'type' => Str::random(15)
        ]);
    }
}
