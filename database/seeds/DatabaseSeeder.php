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
        $this->call(ContactTranslationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductTranslationsSeeder::class);
        $this->call(ProductsPhotoTableSeeder::class);
    }
}
