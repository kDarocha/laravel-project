<?php

use Illuminate\Database\Seeder;

class HomeTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_translations')->insert([
            'home_id' => 1,
            'locale' => 'fr',
            'title' => 'PEW INTERNATIONAL',
            'description' => 'Nous somme une agence of a Brazilian Cooperative which is the leader of 23 sugar refineries, we sell sugar all over the world.'
        ]);

        DB::table('home_translations')->insert([
            'home_id' => 1,
            'locale' => 'en',
            'title' => 'PEW INTERNATIONAL',
            'description' => 'We are a representative agency of a Brazilian Cooperative which is the leader of 23 sugar refineries, we sell sugar all over the world.'
        ]);
    }
}
