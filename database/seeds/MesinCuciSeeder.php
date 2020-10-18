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
            'price' => 175000+1185000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA Sanyo QW 780 - XT',
            'categories_id' => 3,
            'price' => 175000+1220000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 751XT',
            'categories_id' => 3,
            'price' => 175000+1260000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 880XT',
            'categories_id' => 3,
            'price' => 175000+1369000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 950XT',
            'categories_id' => 3,
            'price' => 175000+1499000
        ]); 
        DB::table('products')->insert([
            'name' => 'Polytron PWM 9366',
            'categories_id' => 3,
            'price' => 175000+1500000
        ]); 
        DB::table('products')->insert([
            'name' => 'Sharp Est 80MW',
            'categories_id' => 3,
            'price' => 175000+1650000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 1050XT',
            'categories_id' => 3,
            'price' => 175000+1749000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 78DD',
            'categories_id' => 3,
            'price' => 175000+1965000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA QW 1250XT',
            'categories_id' => 3,
            'price' => 175000+2039000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 88DD',
            'categories_id' => 3,
            'price' => 175000+2150000
        ]); 
        DB::table('products')->insert([
            'name' => 'Polytron PWM 1401',
            'categories_id' => 3,
            'price' => 175000+2220000
        ]); 
        DB::table('products')->insert([
            'name' => 'AQUA 98DD',
            'categories_id' => 3,
            'price' => 175000+2350000
        ]); 
        DB::table('products')->insert([
            'name' => 'LG WP 905 R',
            'categories_id' => 3,
            'price' => 175000+2400000
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung WA 70h4000 SG',
            'categories_id' => 3,
            'price' => 175000+2430000
        ]); 

    }
}
