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
		
		$this->call(CategorySeeder::class);
		$this->call(SmartphoneSeeder::class);
		$this->call(KulkasSeeder::class);
		$this->call(MesinCuciSeeder::class);
    $this->call(TvSeeder::class);
    $this->call(SpeakerSeeder::class);
    $this->call(BlenderSeeder::class);
    $this->call(KipasAnginSeeder::class);
    $this->call(KomporGasSeeder::class);
    $this->call(RiceCookerSeeder::class);
    $this->call(SetrikaSeeder::class);
    $this->call(PerabotSeeder::class);
    $this->call(FurnitureSeeder::class);
    $this->call(DispenserSeeder::class);
    $this->call(PulsaSeeder::class);
    $this->call(ListrikSeeder::class);
    $this->call(InternetSeeder::class);
    $this->call(BPJSSeeder::class);





		// $faker = Faker::create('id_ID');
		// ProductSeeder
		// for($i = 1; $i <= 50; $i++){
    // 		DB::table('products')->insert([
		//         'name' => $faker->company,
		//         'categories_id' => $faker->numberBetween(1,7),
    // 		]);
    // 	}
    }
}
