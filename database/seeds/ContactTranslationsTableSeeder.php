<?php

use Illuminate\Database\Seeder;

class ContactTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_translations')->insert([
            'contact_id' => 1,
            'locale' => 'fr',
            'title' => 'Des questions ?',
            'subtitle' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
            'infos' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p><p>P.O. Box 240000. Huntsville, AL 35813, USA Street address: 305</p><p>support@gmail.com</p><p>+1(06) 778 5468</p>'
        ]);

        DB::table('contact_translations')->insert([
            'contact_id' => 1,
            'locale' => 'en',
            'title' => 'Have any questions?',
            'subtitle' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
            'infos' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p><p>P.O. Box 240000. Huntsville, AL 35813, USA Street address: 305</p><p>support@gmail.com</p><p>+1(06) 778 5468</p>'
        ]);
    }
}
