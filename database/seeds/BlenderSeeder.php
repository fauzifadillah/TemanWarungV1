<?php

use Illuminate\Database\Seeder;

class BlenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Blender Portable 4 Mata Pisau',
            'categories_id' => 4,
            'image' => '/katalog/blender/Blender-Portable-4-Mata-Pisau.png',
            'price' => 96400,
            'price3'=> 32133
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako BL-102 PL',
            'categories_id' => 4,
            'image' => '/katalog/blender/Miyako-BL-102-PL.jpg',
            'price' => 240000+60000,
            'price3'=> 100000
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako BL-101 PL',
            'categories_id' => 4,
            'image' => '/katalog/blender/Miyako-BL-101-PL.jpeg',
            'price' => 205000+60000,
            'price3'=> 88333
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako  BL-151 PF',
            'categories_id' => 4,
            'image' => '/katalog/blender/Miyako-BL-151-PF.jpeg',
            'price' => 222500+60000,
            'price3'=> 94167    
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako BL-152 PF',
            'categories_id' => 4,
            'image' => '/katalog/blender/Miyako-BL-152-PF.jpeg',
            'price' => 250000+60000,
            'price3'=> 103333
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos On The Go CB-522',
            'categories_id' => 4,
            'image' => '/katalog/blender/Cosmos-On-The-Go-CB-522.jpg',
            'price' => 270000+60000,
            'price3'=> 110000   
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CB-281 Gv',
            'categories_id' => 4,
            'image' => '/katalog/blender/Cosmos-CB-281-Gv.jpg',
            'price' => 275555+60000,
            'price3'=> 111852
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako BL-152 GF',
            'categories_id' => 4,
            'image' => '/katalog/blender/Miyako-BL-152-GF.jpeg',
            'price' => 298500+60000,
            'price3'=> 119500
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CB-8282 G',
            'categories_id' => 4,
            'image' => '/katalog/blender/Cosmos-CB-8282-G.jpg',
            'price' => 305000+60000,
            'price3'=> 121667
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CB-802',
            'categories_id' => 4,
            'image' => '/katalog/blender/Cosmos-CB-802.jpg',
            'price' => 435000+60000,
            'price3'=> 165000
        ]);
        DB::table('products')->insert([
            'name' => 'Philips HR-2116',
            'categories_id' => 4,
            'image' => '/katalog/blender/Philips-HR-2116.jpeg',
            'price' => 670000+140000,
            'price3'=> 270000,
            'price6' => 135000
        ]);


    }
}
