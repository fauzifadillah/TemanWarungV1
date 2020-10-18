<?php

use Illuminate\Database\Seeder;

class TvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product Seeder + Rp175.000        
        DB::table('products')->insert([
            'name' => 'Changhong 2463 24 inch',
            'categories_id' => 6,
            'price' => 175000+1099000
        ]);
        DB::table('products')->insert([
            'name' => 'Polytron 20D 22 inch',
            'categories_id' => 6,
            'price' => 175000+1195000
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 24D 310 24 inch',
            'categories_id' => 6,
            'price' => 175000+1205000
        ]);
        DB::table('products')->insert([
            'name' => 'Polytron 24T8511 24 inch',
            'categories_id' => 6,
            'price' => 175000+1415000
        ]);
        DB::table('products')->insert([
            'name' => 'AQUA 32AQT6100 32 inch',
            'categories_id' => 6,
            'price' => 175000+1499000
        ]);
        DB::table('products')->insert([
            'name' => 'Changhong 3263 32 inch',
            'categories_id' => 6,
            'price' => 175000+1575000
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 32D310 32 inch',
            'categories_id' => 6,
            'price' => 175000+1625000
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 32D3000B 32 inch',
            'categories_id' => 6,
            'price' => 175000+1639000
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung UA32N4001AK 32 inch',
            'categories_id' => 6,
            'price' => 175000+1825000
        ]);
        DB::table('products')->insert([
            'name' => 'Sharp 32c32b 32 inch',
            'categories_id' => 6,
            'price' => 175000+1890000
        ]);
        DB::table('products')->insert([
            'name' => 'LG LK 500 32 inch',
            'categories_id' => 6,
            'price' => 175000+1925000
        ]);
        DB::table('products')->insert([
            'name' => 'LG LM 550 32 inch',
            'categories_id' => 6,
            'price' => 175000+1925000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Mi 4A 32 inch',
            'categories_id' => 6,
            'price' => 175000+1999000
        ]);
    }
}
