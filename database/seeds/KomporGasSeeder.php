<?php

use Illuminate\Database\Seeder;

class KomporGasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Rinnai RI-522S',
            'categories_id' => 9,
            'image' => '/katalog/gas/Rinnai-RI-522S.png',
            'price' => 271400+60000,
            'price3' =>110467
        ]);
        DB::table('products')->insert([
            'name' => 'SELANG GAS WINN W 28',
            'categories_id' => 9,
            'image' => '/katalog/gas/SELANG-GAS-WINN-W-28.jpeg',
            'price' => 70500+60000,
            'price3' =>43500
        ]);
        DB::table('products')->insert([
            'name' => 'Quantum QGC201',
            'categories_id' => 9,
            'image' => '/katalog/gas/Quantum-QGC201.jpeg',
            'price' => 242800+60000,
            'price3' =>100933
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako KG101C (1 Tungku)',
            'categories_id' => 9,
            'image' => '/katalog/gas/Miyako-KG101C-(1-Tungku).jpg',
            'price' => 127000+60000,
            'price3' =>62333
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI301S (1 Tungku)',
            'categories_id' => 9,
            'image' => '/katalog/gas/Rinnai-RI301S-(1-Tungku).jpeg',
            'price' => 150000+60000,
            'price3' =>70000
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai  RI302S',
            'categories_id' => 9,
            'image' => '/katalog/gas/Rinnai-RI302S.jpeg',
            'price' => 252222+60000,
            'price3' =>104074
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI-522C',
            'categories_id' => 9,
            'image' => '/katalog/gas/Rinnai-RI-522C.jpg',
            'price' => 288500+60000,
            'price3' =>116167
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI-602E',
            'categories_id' => 9,
            'image' => '/katalog/gas/Rinnai-RI-602E.jpeg',
            'price' => 348888+60000,
            'price3' =>136296
        ]);
        DB::table('products')->insert([
            'name' => 'Elpiji 3kg',
            'categories_id' => 9,
            'image' => '/katalog/gas/lpg3.jpeg',
            'price' => 159000+20000,
            'price3' =>
        ]);

    }
}
