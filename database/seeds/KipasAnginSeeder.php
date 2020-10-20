<?php

use Illuminate\Database\Seeder;

class KipasAnginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Sanex FD-0888',
            'categories_id' => 5,
            'image' => '/katalog/kipasangin/Sanex-FD-0888.jpeg',
            'price' => 96100+43635
        ]);
        DB::table('products')->insert([
            'name' => 'TRISONIC  1601 (Berdiri)',
            'categories_id' => 5,
            'image' => '/katalog/kipasangin/TRISONIC-1601-Berdiri.jpeg',
            'price' => 119500+60000
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex SB 818 (Meja)',
            'categories_id' => 5,
            'image' => '/katalog/kipasangin/Sanex-SB-818-Meja.png',
            'price' => 130000+60000
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex FW-1679 (Dinding)',
            'categories_id' => 5,
            'image' => '/katalog/kipasangin/Sanex-FW-1679-Dinding.jpg',
            'price' => 164000+60000
        ]);
    }
}
