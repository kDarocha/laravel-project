<?php

use Illuminate\Database\Seeder;

class SliderTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_translations')->insert([
            'slider_id' => 1,
            'locale' => 'fr',
            'title' => 'Les meilleurs tomates',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since',
        ]);

        DB::table('slider_translations')->insert([
            'slider_id' => 1,
            'locale' => 'en',
            'title' => 'The best tomate',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since',
        ]);

        DB::table('slider_translations')->insert([
            'slider_id' => 2,
            'locale' => 'fr',
            'title' => 'Les meilleurs sucres',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since',
        ]);

        DB::table('slider_translations')->insert([
            'slider_id' => 2,
            'locale' => 'en',
            'title' => 'The best sugars',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since',
        ]);
    }
}
