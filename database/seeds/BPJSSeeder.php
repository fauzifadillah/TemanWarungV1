<?php

use Illuminate\Database\Seeder;

class BPJSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'BPJS Ketenagakerjaan',
            'categories_id' => 18,
            'image' => 'https://www.clipartmax.com/png/middle/140-1408338_giving-hand-silhouette.png',
            'price' => 1000,
        ]);
        DB::table('products')->insert([
            'name' => 'BPJS Kesehatan',
            'categories_id' => 18,
            'image' => 'https://www.clipartmax.com/png/middle/140-1408338_giving-hand-silhouette.png',
            'price' => 1000,
        ]);
    }
}
