<?php

use Illuminate\Database\Seeder;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Etalase 1,5 M',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/ETALASE-1.5M.jpeg',
            'price' => 210000+1159999,
            'price3' => 456666,
            'price6'=> 228333,
            'price12' => 114167
        ]);
        DB::table('products')->insert([
            'name' => 'Lemari rak piring magic com polos 3 pintu',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Lemari-rak-piring-magic-com-polos-3-pintu.jpg',
            'price' => 140000+729999,
            'price3' => 290000,
            'price6'=> 145000,
            'price12' => 72500
        ]);
        DB::table('products')->insert([
            'name' => 'Lemari rak piring fullbox jumbo 3 pt',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Lemari-rak-piring-fullbox-jumbo-3-pt.jpeg',
            'price' => 140000+779999,
            'price3' => 306666,
            'price6'=> 153333,
            'price12' => 76667
        ]);
        DB::table('products')->insert([
            'name' => 'Lemari rak piring polos 2 pintu',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Lemari-rak-piring-polos-2-pintu.jpeg',
            'price' => 140000+629999,
            'price3' => 256666,
            'price6'=> 128333,
            'price12' => 64167
        ]);
        DB::table('products')->insert([
            'name' => 'Etalase 2 M',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Etalase-2-M.jpg',
            'price' => 210000+1459999,
            'price3' => 556666,
            'price6'=> 278333,
            'price12' => 139167
        ]);
        DB::table('products')->insert([
            'name' => 'Etalase 1 M',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Etalase-1-M.jpeg',
            'price' => 140000+929999,
            'price3' => 356666,
            'price6'=> 178333,
            'price12' => 89167
        ]);
        DB::table('products')->insert([
            'name' => 'Etalase 1,2 M',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Etalase-1,2-M.jpg',
            'price' => 210000+1159999,
            'price3' => 456666,
            'price6'=> 228333,
            'price12' => 114167
        ]);
        DB::table('products')->insert([
            'name' => 'Kursi Plastik Motif Rotan Napolly-3R3',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Kursi-Plastik-Motif-Rotan-Napolly-3R3.jpeg',
            'price' => 22950+37000,
            'price3' => 19983,
        ]);
        DB::table('products')->insert([
            'name' => 'Kursi Baso Napolly BIG 303',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Kursi-Baso-Napolly-BIG-303.jpeg',
            'price' => 24000+40000,
            'price3' => 21333,

        ]);
        DB::table('products')->insert([
            'name' => 'Kursi plastik Olymplast 508',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Kursi-plastik-Olymplast-508.jpeg',
            'price' => 115000+60000,
            'price3' => 58333,

        ]);
        DB::table('products')->insert([
            'name' => 'Kursi baso rotan olimplast',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Kursi-plastik-Olymplast-508.jpeg',
            'price' => 22500+35000,
            'price3' => 19083,
        ]);
        DB::table('products')->insert([
            'name' => 'Meja olimplast OCTR',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Meja-Olimplas-OCTR.jpeg',
            'price' => 43215+94900,
            'price3' => 46038,

        ]);
        DB::table('products')->insert([
            'name' => 'Meja olymplast OSTR',
            'categories_id' => 10,
            'image' => '/katalog/furnitur/Meja-olymplast-OSTR.jpeg',
            'price' => 60000+140000,
            'price3' => 66667,

        ]);
    }
}
