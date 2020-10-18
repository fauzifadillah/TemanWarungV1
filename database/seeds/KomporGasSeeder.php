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
            'price' => 271400
        ]);
        DB::table('products')->insert([
            'name' => 'SELANG GAS WINN W 28',
            'categories_id' => 9,
            'price' => 70500
        ]);
        DB::table('products')->insert([
            'name' => 'Quantum QGC201',
            'categories_id' => 9,
            'price' => 242800
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako KG101C (1 Tungku)',
            'categories_id' => 9,
            'price' => 127000
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI301S (1 Tungku)',
            'categories_id' => 9,
            'price' => 150000
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai  RI302S',
            'categories_id' => 9,
            'price' => 252222
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI-522C',
            'categories_id' => 9,
            'price' => 288500
        ]);
        DB::table('products')->insert([
            'name' => 'Rinnai RI-602E',
            'categories_id' => 9,
            'price' => 348888
        ]);

    }
}
