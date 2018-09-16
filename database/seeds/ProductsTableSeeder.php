<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'slug' => str_slug('Tissue fallen from the sky'),
            'picture' => 'uploads/products/mouchoir.jpg',
        ]);

        DB::table('products')->insert([
            'slug' => str_slug('Pasta fan'),
            'picture' => 'uploads/products/ventilateur.jpg',
        ]);

        DB::table('products')->insert([
            'slug' => str_slug('Powder sugar'),
            'picture' => 'uploads/products/ventilateur.jpg',
        ]);
    }
}
