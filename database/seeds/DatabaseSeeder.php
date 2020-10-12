<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		// CategorySeeder
		DB::table('categories')->insert([
	        'name' => 'Makanan',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Minuman',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Elektronik',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Rumah Tangga',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Fashion',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Buku',
		]); 
		DB::table('categories')->insert([
	        'name' => 'Games',
		]); 

		$faker = Faker::create('id_ID');
		// ProductSeeder
		for($i = 1; $i <= 50; $i++){
    		DB::table('products')->insert([
		        'name' => $faker->company,
		        'categories_id' => $faker->numberBetween(1,7),
    		]);
    	}
    }
}
