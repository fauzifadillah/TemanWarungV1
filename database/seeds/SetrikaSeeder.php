<?php

use Illuminate\Database\Seeder;

class SetrikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Niko NK-333S',
            'categories_id' => 13,
            'iamge' => '/katalog/setrika/Niko-NK-333S.jpeg',
            'price' => 33590+67400,
            'price3'=>33663
        ]);
        DB::table('products')->insert([
            'name' => 'Niko NK-999S',
            'categories_id' => 13,
            'iamge' => '/katalog/setrika/Niko-NK-999S.jpeg',
            'price' => 33345+66700,
            'price3'=>33348
        ]);
        DB::table('products')->insert([
            'name' => 'Philips Diva Gc 122',
            'categories_id' => 13,
            'iamge' => '/katalog/setrika/Philips-Diva-Gc-122.jpg',
            'price' => 60000+175000,
            'price3'=>78333
        ]);
        DB::table('products')->insert([
            'name' => 'Philips HD1172 Klasik',
            'categories_id' => 13,
            'iamge' => '/katalog/setrika/Philips-HD1172-Klasik.jpeg',
            'price' => 60000+265000,
            'price3'=>108333
        ]);
        DB::table('products')->insert([
            'name' => 'Philips GC 1418',
            'categories_id' => 13,
            'iamge' => '/katalog/setrika/Philips-GC-1418.jpeg',
            'price' => 60000+225000,
            'price3'=>95000
        ]);
    }
}
