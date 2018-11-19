<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'product_id' => 1,
            'picture' => '/storage/photos/sugar.jpg',
        ]);

        DB::table('sliders')->insert([
            'product_id' => 2,
            'picture' => '/storage/photos/sugar_2.jpg',
        ]);
    }
}
