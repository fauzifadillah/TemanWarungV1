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
            'categories_id' => 4,
            'price' => 96100
        ]);
        DB::table('products')->insert([
            'name' => 'TRISONIC  1601 (Berdiri)',
            'categories_id' => 4,
            'price' => 119500
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex SB 818 (Meja)',
            'categories_id' => 4,
            'price' => 130000
        ]);
        DB::table('products')->insert([
            'name' => 'Sanex FW-1679 (Dinding)',
            'categories_id' => 4,
            'price' => 164000
        ]);
    }
}