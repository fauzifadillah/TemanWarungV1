<?php

use Illuminate\Database\Seeder;

class InternetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'CBN',
            'categories_id' => 17,
            'image' => 'https://img2.pngdownload.id/20190208/ugb/kisspng-pt-cyberindo-aditama-cbn-internet-head-office-lo-id-cert-5c5d402a997e34.4409916715496151466287.jpg',
            'price' => 1000,
        ]);
        DB::table('products')->insert([
            'name' => 'First Media',
            'categories_id' => 17,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/First_Media_logo.svg/1200px-First_Media_logo.svg.png',
            'price' => 1000,
        ]);
        DB::table('products')->insert([
            'name' => 'IndiHome',
            'categories_id' => 17,
            'image' => 'https://img2.pngdownload.id/20180816/zaq/kisspng-indihome-logo-vector-graphics-brand-font-logo-indihome-telkom-237-design-logo-design-5b7572bc8f8ee7.788750591534423740588.jpg',
            'price' => 1000,
        ]);
        DB::table('products')->insert([
            'name' => 'Indosat GIG',
            'categories_id' => 17,
            'image' => 'https://kontak.win/wp-content/uploads/2017/02/Logo-Indosat-GIG.jpg',
            'price' => 1000,
        ]);
        DB::table('products')->insert([
            'name' => 'Wifi.id',
            'categories_id' => 17,
            'image' => 'https://img2.pngdownload.id/20180623/s/kisspng-wifi-id-wi-fi-internet-telkom-indonesia-mobile-pho-telkomsel-5b2f1247225d23.2456608915298115271408.jpg',
            'price' => 1000,
        ]);
    }
}
