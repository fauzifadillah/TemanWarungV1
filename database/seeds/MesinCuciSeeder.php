<?php

use Illuminate\Database\Seeder;

class MesinCuciSeeder extends Seeder
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
            'name' => 'Polytron 2 Tabung 7366',
            'categories_id' => 3,
            'price' => 210000+1185000,
            'price3' =>465000,
            'price6' =>232500,
            'price12' =>116250
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA Sanyo QW 780 - XT',
            'categories_id' => 3,
            'price' => 210000+1220000,
            'price3' =>476667,
            'price6' =>238333,
            'price12' =>119167
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 751XT',
            'categories_id' => 3,
            'price' => 210000+1260000,
            'price3' =>490000,
            'price6' =>245000,
            'price12' =>122500
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 880XT',
            'categories_id' => 3,
            'price' => 210000+1369000,
            'price3' =>526333,
            'price6' =>263167,
            'price12' =>131583
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 950XT',
            'categories_id' => 3,
            'price' => 210000+1499000,
            'price3' =>569667,
            'price6' =>284833,
            'price12' =>142417
        ]); 
        DB::table('products')->insert([
            'name' => 'Polytron PWM 9366',
            'categories_id' => 3,
            'price' => 210000+1500000,
            'price3' =>570000,
            'price6' =>285000,
            'price12' =>142500
        ]); 
        DB::table('products')->insert([
            'name' => 'Sharp Est 80MW',
            'categories_id' => 3,
            'price' => 210000+1650000,
            'price3' =>620000,
            'price6' =>310000,
            'price12' =>155000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 1050XT',
            'categories_id' => 3,
            'price' => 210000+1749000,
            'price3' =>653000,
            'price6' =>326500,
            'price12' =>163250
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 78DD',
            'categories_id' => 3,
            'price' => 210000+1965000,
            'price3' =>725000,
            'price6' =>362500,
            'price12' =>181250
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 1250XT',
            'categories_id' => 3,
            'price' => 210000+2039000,
            'price3' =>749667,
            'price6' =>374833,
            'price12' =>187417
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 88DD',
            'categories_id' => 3,
            'price' => 210000+2150000,
            'price3' =>786667,
            'price6' =>393333,
            'price12' =>196667
        ]); 
        DB::table('products')->insert([
            'name' => 'Polytron PWM 1401',
            'categories_id' => 3,
            'price' => 210000+2220000,
            'price3' =>810000,
            'price6' =>405000,
            'price12' =>202500
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 98DD',
            'categories_id' => 3,
            'price' => 210000+2350000,
            'price3' =>853333,
            'price6' =>426667,
            'price12' =>213333
        ]); 
        DB::table('products')->insert([
            'name' => 'LG WP 905 R',
            'categories_id' => 3,
            'price' => 210000+2400000,
            'price3' =>870000,
            'price6' =>435000,
            'price12' =>217500
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung WA 70h4000 SG',
            'categories_id' => 3,
            'price' => 210000+2430000,
            'price3' =>880000,
            'price6' =>440000,
            'price12' =>220000
        ]); 

    }
}
