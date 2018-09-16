<?php

use Illuminate\Database\Seeder;

class ProductTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_translations')->insert([
            'product_id' => 1,
            'locale' => 'fr',
            'title' => 'Mouchoir tombé du ciel',
            'description' => 'Fini les mauvais rhumes !',
            'content' => 'Un papier double épaisseur qui épouse parfaitement la forme de votre nez et viendra ceuillir à la source votre trouble nasal',
        ]);

        DB::table('product_translations')->insert([
            'product_id' => 1,
            'locale' => 'en',
            'title' => 'Tissue fallen from the sky',
            'description' => 'No more bad colds !',
            'content' => 'A double thickness paper that fits perfectly the shape of your nose and will come to collect at the source your nasal problem',
        ]);

        DB::table('product_translations')->insert([
            'product_id' => 2,
            'locale' => 'fr',
            'title' => 'Ventilateur à pates',
            'description' => 'Fini les brûlures !',
            'content' => 'Un ventilateur dernière génération pour une mise en bouche réussie. Qui a dit que manger des nouilles faisaient mal ?',
        ]);

        DB::table('product_translations')->insert([
            'product_id' => 2,
            'locale' => 'en',
            'title' => 'Pasta fan',
            'description' => 'No more burns !',
            'content' => 'A latest generation fan for a successful appetizer. Who said that eating noodles hurt ?',
        ]);

        DB::table('product_translations')->insert([
            'product_id' => 3,
            'locale' => 'fr',
            'title' => 'Sucre en poudre',
            'description' => 'Bonjour le diabète',
            'content' => 'Du sucre dernière génération tout le monde se les arrache déjà',
        ]);

        DB::table('product_translations')->insert([
            'product_id' => 3,
            'locale' => 'en',
            'title' => 'Powder sugar',
            'description' => 'Hello to the diabetes',
            'content' => 'Sugar last generation, everyone want them already',
        ]);
    }
}
