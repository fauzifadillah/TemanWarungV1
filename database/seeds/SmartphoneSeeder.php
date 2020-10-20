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
            'price' =>175000+ 843000,
            'price3' =>163833
        ]); 
        DB::table('products')->insert([
            'name' => 'OPPO F1S 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1165000,
            'price3' =>458333,
            'price6' =>229167,
            'price12' =>114583
        ]); 
        DB::table('products')->insert([
            'name' => 'OPPO F1S 4/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1235000,
            'price3' =>481667,
            'price6' =>240833,
            'price12' =>120417
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1755000,
            'price3' =>655000,
            'price6' =>327500,
            'price12' =>163750
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 2 1/ 8GB',
            'categories_id' => 1,
            'price' =>175000+ 469000,
            'price3' =>203000,
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 4/64GB',
            'categories_id' => 1,
            'price' =>210000+ 1975000,
            'price3' =>728333,
            'price6' =>364167,
            'price12' =>182083
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 1/16GB',
            'categories_id' => 1,
            'price' =>175000+ 975000,
            'price3' =>371667,
            'price6' =>185833,
            'price12' =>92917
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 2/16GB',
            'categories_id' => 1,
            'price' =>210000+ 1199000,
            'price3' =>469667,
            'price6' =>234833,
            'price12' =>117417
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1125000,
            'price3' =>445000,
            'price6' =>222500,
            'price12' =>111250
        ]); 
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A01S 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1480000,
            'price3' =>563333,
            'price6' =>281667,
            'price12' =>140833
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9A 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1314000,
            'price3' =>508000,
            'price6' =>254000,
            'price12' =>127000
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9A 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1465000,
            'price3' =>558333,
            'price6' =>279167,
            'price12' =>139583
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8A Pro 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1775000,
            'price3' =>661667,
            'price6' =>330833,
            'price12' =>165417
        ]); 
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8A Pro 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1575000,
            'price3' =>595000,
            'price6' =>297500,
            'price12' =>148750
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9C 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1575000,
            'price3' =>595000,
            'price6' =>297500,
            'price12' =>148750
        ]);
        DB::table('products')->insert([
            'name' => 'Vivo Y91C 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1599000,
            'price3' =>603000,
            'price6' =>301500,
            'price12' =>150750
        ]);
        DB::table('products')->insert([
            'name' => 'Realme C11 2/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1599000,
            'price3' =>603000,
            'price6' =>301500,
            'price12' =>150750
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi  Redmi 9  3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1775000,
            'price3' =>661667,
            'price6' =>330833,
            'price12' =>165417
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi  Redmi 9C 4/64GB',
            'categories_id' => 1,
            'price' =>210000+ 1775000,
            'price3' =>661667,
            'price6' =>330833,
            'price12' =>165417
        ]);
        DB::table('products')->insert([
            'name' => 'Vivo  Y12i 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1798000,
            'price3' =>669333,
            'price6' =>334667,
            'price12' =>167333
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A11 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1799000,
            'price3' =>669667,
            'price6' =>334833,
            'price12' =>167417
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 8 4/64GB',
            'categories_id' => 1,
            'price' =>210000+ 1799000,
            'price3' =>669667,
            'price6' =>334833,
            'price12' =>167417
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy M11 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1799000,
            'price3' =>669667,
            'price6' =>334833,
            'price12' =>167417
        ]);
        DB::table('products')->insert([
            'name' => 'OPPO A12 3/32GB',
            'categories_id' => 1,
            'price' =>210000+ 1899000,
            'price3' =>703000,
            'price6' =>351500,
            'price12' =>175750
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9 4/64GB',
            'categories_id' => 1,
            'price' =>210000+ 1975000,
            'price3' =>728333,
            'price6' =>364167,
            'price12' =>182083
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi Note 8 4/64GB',
            'categories_id' => 1,
            'price' =>210000+ 2175000,
            'price3' =>795000,
            'price6' =>397500,
            'price12' =>198750
        ]);
    }
}
