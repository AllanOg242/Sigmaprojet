<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateur')->insert([
            'login' => Str::random(15),
            'mdp' => Str::random(15),
            'nom' => Str::random(15),
            'prenom' => Str::random(15),
            'adresse' => Str::random(15)
        ]);
    }
}
