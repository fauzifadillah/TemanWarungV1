<?php

use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
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
            'name' => 'OPPO A37 2/16GB',
            'categories_id' => 1,
            'price' =>175000+ 843000
        ]); 
        DB::table('products')->insert([
            'name' => 'OPPO F1S 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1165000
        ]); 
        DB::table('products')->insert([
            'name' => 'OPPO F1S 4/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1235000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1755000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 2 1/ 8GB',
            'categories_id' => 1,
            'price' =>175000+ 469000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 4/64GB',
            'categories_id' => 1,
            'price' =>175000+ 1975000
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 1/16GB',
            'categories_id' => 1,
            'price' =>175000+ 975000
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 2/16GB',
            'categories_id' => 1,
            'price' =>175000+ 1199000
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1125000
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01S 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1480000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9A 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1314000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9A 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1465000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8A Pro 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1775000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8A Pro 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1575000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9C 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1575000
        ]);
        DB::table('products')->insert([
            'name' => 'Vivo Y91C 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1599000
        ]);
        DB::table('products')->insert([
            'name' => 'Realme C11 2/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1599000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi  Redmi 9  3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1775000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi  Redmi 9C 4/64GB',
            'categories_id' => 1,
            'price' =>175000+ 1775000
        ]);
        DB::table('products')->insert([
            'name' => 'Vivo  Y12i 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1798000
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A11 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1799000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8 4/64GB',
            'categories_id' => 1,
            'price' =>175000+ 1799000
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy M11 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1799000
        ]);
        DB::table('products')->insert([
            'name' => 'OPPO A12 3/32GB',
            'categories_id' => 1,
            'price' =>175000+ 1899000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 4/64GB',
            'categories_id' => 1,
            'price' =>175000+ 1975000
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi Note 8 4/64GB',
            'categories_id' => 1,
            'price' =>175000+ 2175000
        ]);
    }
}
