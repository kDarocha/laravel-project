<?php

use Illuminate\Database\Seeder;

class ProductsPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_photos')->insert([
            'product_id' => 1,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 1,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 1,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 2,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 2,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 3,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);

        DB::table('products_photos')->insert([
            'product_id' => 3,
            'picture' => 'uploads/products/mouchoir.jpg'
        ]);
    }
}
