<?php

use Illuminate\Database\Seeder;

class ListrikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Token Listrik 20.000',
            'categories_id' => 16,
            'image' => 'https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru.jpg',
            'price' => 20000+2000,
        ]);
        DB::table('products')->insert([
            'name' => 'Token Listrik 50.000',
            'categories_id' => 16,
            'image' => 'https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru.jpg',
            'price' => 50000+2000,
        ]);
        DB::table('products')->insert([
            'name' => 'Token Listrik 100.000',
            'categories_id' => 16,
            'image' => 'https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru.jpg',
            'price' => 100000+2000,
        ]);
        DB::table('products')->insert([
            'name' => 'Token Listrik 200.000',
            'categories_id' => 16,
            'image' => 'https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru.jpg',
            'price' => 200000+2000,
        ]);
        DB::table('products')->insert([
            'name' => 'Token Listrik 500.000',
            'categories_id' => 16,
            'image' => 'https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru.jpg',
            'price' => 500000+2000,
        ]);
    }
}
