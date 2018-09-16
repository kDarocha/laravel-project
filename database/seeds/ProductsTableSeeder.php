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
            'title_fr' => 'Mouchoir tombé du ciel',
            'title_en' => 'Handkerchief fallen from the sky',
            'description_fr' => 'Fini les mauvais rhumes !',
            'description_en' => 'No more bad colds !',
            'content_fr' => 'Un papier double épaisseur qui épouse parfaitement la forme de votre nez et viendra ceuillir à la source votre trouble nasal',
            'content_en' => 'A double thickness paper that fits perfectly the shape of your nose and will come to collect at the source your nasal problem',
            'slug' => '/product/Mouchoir',
            'picture' => 'images/mouchoir.jpg',
        ]);

        DB::table('products')->insert([
            'title_fr' => 'Ventilateur à pates',
            'title_en' => 'Pasta fan',
            'description_fr' => 'Fini les brûlures !',
            'description_en' => 'No more burns !',
            'content_fr' => 'Un ventilateur dernière génération pour une mise en bouche réussie. Qui a dit que manger des nouilles faisaient mal ?',
            'content_en' => 'A latest generation fan for a successful appetizer. Who said that eating noodles hurt ?',
            'slug' => '/product/Mouchoir',
            'picture' => 'images/mouchoir.jpg',
        ]);
    }
}
