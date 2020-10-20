<?php

use Illuminate\Database\Seeder;

class DispenserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Cosmos CWD-1060',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Cosmos-CWD-1060.jpeg',
            'price' => 60000+111111,
            'price3'=>57037
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex D102',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Sanex-D102.gif',
            'price' => 41150+89000,
            'price3'=>43383
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD-185 H',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Miyako-WD-185-H.png',
            'price' => 60000+119500,
            'price3'=>59833
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex D-188',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Sanex-D-188.jpeg',
            'price' => 60000+100000,
            'price3'=>53333
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CWD1060',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Cosmos-CWD-1060.jpeg',
            'price' => 60000+111111,
            'price3'=>57037
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD186',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Miyako-WD186.jpg',
            'price' => 60000+130000,
            'price3'=>63333
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CWD1138',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Cosmos-CWD1138.jpeg',
            'price' => 60000+148000,
            'price3'=>69333
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD290',
            'categories_id' => 8,
            'image' => '/katalog/dispenser/Miyako-WD290.png',
            'price' => 60000+304000,
            'price3'=>121333
        ]);

    }
}
