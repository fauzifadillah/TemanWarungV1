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
            'categories_id' => 4,
            'price' => 50000+111111
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex D102',
            'categories_id' => 4,
            'price' => 50000+89000
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD-185 H',
            'categories_id' => 4,
            'price' => 50000+119500
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex D-188',
            'categories_id' => 4,
            'price' => 50000+100000
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CWD1060',
            'categories_id' => 4,
            'price' => 50000+111111
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD186',
            'categories_id' => 4,
            'price' => 50000+130000
        ]);
        DB::table('products')->insert([
            'name' => 'Cosmos CWD1138',
            'categories_id' => 4,
            'price' => 50000+148000
        ]);
        DB::table('products')->insert([
            'name' => 'Miyako WD290',
            'categories_id' => 4,
            'price' => 50000+304000
        ]);

    }
}
