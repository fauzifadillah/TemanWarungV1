<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CategorySeeder
		DB::table('categories')->insert([
	        'name' => 'SMARTPHONE',
		]); 
		DB::table('categories')->insert([
	        'name' => 'KULKAS',
        ]); 
        DB::table('categories')->insert([
	        'name' => 'MESIN CUCI',
		]); 
		DB::table('categories')->insert([
	        'name' => 'BLENDER',
		]); 
		DB::table('categories')->insert([
	        'name' => 'KIPAS ANGIN',
		]); 
		DB::table('categories')->insert([
	        'name' => 'TV',
		]); 
		DB::table('categories')->insert([
	        'name' => 'SPEAKER',
		]); 
		DB::table('categories')->insert([
	        'name' => 'DISPENSER',
		]); 
		DB::table('categories')->insert([
		    'name' => 'GAS',
		]); 
		DB::table('categories')->insert([
		    'name' => 'FURNITUR',
		]); 
		DB::table('categories')->insert([
		    'name' => 'RICE COOKER',
		]); 
		DB::table('categories')->insert([
		    'name' => 'PERABOT',
		]); 
		DB::table('categories')->insert([
		    'name' => 'SETRIKA',
		]); 
		DB::table('categories')->insert([
		    'name' => 'LAPTOP/TABLET',
		]); 
    }
}
