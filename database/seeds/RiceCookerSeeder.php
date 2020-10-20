<?php

use Illuminate\Database\Seeder;

class RiceCookerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Miyako MCM-609',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Miyako-MCM-609.jpeg',
            'price' => 60000+163100,
            'price3'=>74367
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako MCM-606 A',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Miyako-MCM-606-A.jpeg',
            'price' => 60000+184600,
            'price3'=>81533
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako  MCM-528',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Miyako-MCM-528.jpeg',
            'price' => 60000+211700,
            'price3'=>90567
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako  MCM-508',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Miyako-MCM-508.jpeg',
            'price' => 60000+214900,
            'price3'=>91633
        ]);
        DB::table('products')->insert([
            'name' => 'Maspion  EX 109',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Maspion-EX-109.jpg',
            'price' => 60000+256700,
            'price3'=>105567
        ]);
        DB::table('products')->insert([
            'name' => 'Bolde  Super Cook Titanium ECO',
            'categories_id' => 11,
            'image' => '/katalog/rice-cooker/Bolde-Super-Cook-Titanium-ECO.jpg',
            'price' => 60000+193900,
            'price3'=>84633
        ]);
    }
}
