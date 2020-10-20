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
            'name' => 'Changhong 2463 24 inch',
            'categories_id' => 10,
            'price' => 210000+1099000,
            'price3' => 436333,
            'price6'=> 218167,
            'price12' => 109083
        ]);
        DB::table('products')->insert([
            'name' => 'Polytron 20D 22 inch',
            'categories_id' => 10,
            'price' => 210000+1195000,
            'price3' => 468333,
            'price6'=> 234167,
            'price12' => 117083
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 24D 310 24 inch',
            'categories_id' => 10,
            'price' => 210000+1205000,
            'price3' => 471667,
            'price6'=> 235833,
            'price12' => 117917
        ]);
        DB::table('products')->insert([
            'name' => 'Polytron 24T8511 24 inch',
            'categories_id' => 10,
            'price' => 210000+1415000,
            'price3' => 541667,
            'price6'=> 270833,
            'price12' => 135417
        ]);
        DB::table('products')->insert([
            'name' => 'AQUA 32AQT6100 32 inch',
            'categories_id' => 10,
            'price' => 210000+1499000,
            'price3' => 569667,
            'price6'=> 284833,
            'price12' => 142417
        ]);
        DB::table('products')->insert([
            'name' => 'Changhong 3263 32 inch',
            'categories_id' => 10,
            'price' => 210000+1575000,
            'price3' => 595000,
            'price6'=> 297500,
            'price12' => 148750
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 32D310 32 inch',
            'categories_id' => 10,
            'price' => 210000+1625000,
            'price3' => 1011667,
            'price6'=> 305833,
            'price12' => 152917
        ]);
        DB::table('products')->insert([
            'name' => 'TCL 32D3000B 32 inch',
            'categories_id' => 10,
            'price' => 210000+1639000,
            'price3' => 1016333,
            'price6'=> 308167,
            'price12' => 154083
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung UA32N4001AK 32 inch',
            'categories_id' => 10,
            'price' => 210000+1825000,
            'price3' => 1078333,
            'price6'=> 339167,
            'price12' => 169583
        ]);
        DB::table('products')->insert([
            'name' => 'Sharp 32c32b 32 inch',
            'categories_id' => 10,
            'price' => 210000+1890000,
            'price3' => 700000,
            'price6'=> 350000,
            'price12' => 175000
        ]);
        DB::table('products')->insert([
            'name' => 'LG LK 500 32 inch',
            'categories_id' => 10,
            'price' => 210000+1925000,
            'price3' => 711667,
            'price6'=> 355833,
            'price12' => 177917
        ]);
        DB::table('products')->insert([
            'name' => 'LG LM 550 32 inch',
            'categories_id' => 10,
            'price' => 210000+1925000,
            'price3' => 711667,
            'price6'=> 355833,
            'price12' => 177917
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Mi 4A 32 inch',
            'categories_id' => 10,
            'price' => 210000+1999000,
            'price3' => 736333,
            'price6'=> 368167,
            'price12' => 184083
        ]);
    }
}
