<?php

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
        $this->call(AboutTableSeeder::class);
        $this->call(AboutTranslationsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(ContactTranslationsTableSeeder::class);
        $this->call(HomeTranslationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductTranslationsSeeder::class);
        $this->call(ProductsPhotoTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(SliderTranslationsTableSeeder::class);
    }
}
