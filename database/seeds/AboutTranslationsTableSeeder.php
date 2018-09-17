<?php

use Illuminate\Database\Seeder;

class AboutTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_translations')->insert([
            'about_id' => 1,
            'locale' => 'fr',
            'content' => '<p>We are a representative agency of a Brazilian Cooperative which is the leader of 23 sugar refineries. Able to supply sugar to industries, with annual contracts or to spot, we sell both with CIF or FOB delivery.</p> <p>For minimum quantities we can supply you from our warehouses located in Eastern Europe while for important contracts, we deliver the sugar from Brazil with CIF destiny to the port of your country.</p> <p>We take care of your sugar contract from start to finish even with the advice of our associated experts. </p><p>A successful partnership with major companies of maritime transport and first class insurance companies, guarantee the full quality and safety for the customer, a crucial factor to be maintained the level of quality expected by the client.</p>',
        ]);

        DB::table('about_translations')->insert([
            'about_id' => 1,
            'locale' => 'en',
            'content' => '<p>We are a representative agency of a Brazilian Cooperative which is the leader of 23 sugar refineries. Able to supply sugar to industries, with annual contracts or to spot, we sell both with CIF or FOB delivery.</p> <p>For minimum quantities we can supply you from our warehouses located in Eastern Europe while for important contracts, we deliver the sugar from Brazil with CIF destiny to the port of your country.</p> <p>We take care of your sugar contract from start to finish even with the advice of our associated experts. </p><p>A successful partnership with major companies of maritime transport and first class insurance companies, guarantee the full quality and safety for the customer, a crucial factor to be maintained the level of quality expected by the client.</p>',
        ]);
    }
}
