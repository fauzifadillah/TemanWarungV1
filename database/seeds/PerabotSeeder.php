<?php

use Illuminate\Database\Seeder;

class PerabotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Alat Pel BOLDe Super Mop M-788X+ Botol Pewangi Spin Mop Lantai ',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Alat-Pel-BOLDe-Super-Mop-M-788X+-Botol-Pewangi-Spin-Mop-Lantai.jpeg',
            'price' => 60000+138600,
            'price3'=>66200
        ]);
        DB::table('products')->insert([
            'name' => 'Super Mop Spin Mop May Mop P-01 Ultra Mop ',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Super-Mop-Spin-Mop-May-Mop-P-01-Ultra-Mop.jpg',
            'price' => 60000+90000,
            'price3'=>50000
        ]);
        DB::table('products')->insert([
            'name' => 'Wajan Terbalik Kwalik Galaxy Creper kewalik ',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Wajan-Terbalik-Kwalik-Galaxy-Creper-kewalik.jpeg',
            'price' => 60000+78999,
            'price3'=>46333
        ]);
        DB::table('products')->insert([
            'name' => 'Maxim Valentino Fry Pan Frypan Teflon Wajan Penggoreng 20 cm / 30 cm - 18 cm',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Beli-Maxim-Valentino-Fry-Pan-Frypan-Teflon-Wajan-Penggoreng.jpeg',
            'price' => 60000+51000,
            'price3'=>37000
        ]);
        DB::table('products')->insert([
            'name' => 'Maxim Venice set 5 Panci teflon fry pan Penggorengan Tutup Kaca Wajan',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Maxim-Venice-set-5-Panci-teflon-fry-pan-Penggorengan-Tutup-Kaca-Wajan.jpeg',
            'price' => 60000+160000,
            'price3'=>73333
        ]);
        DB::table('products')->insert([
            'name' => 'CARIN Frypan Panci Wajan Penggorengan Set 3 Stainless Fry Pan Induksi',
            'categories_id' => 12,
            'image' => '/katalog/perabot/CARIN-Frypan-Panci-Wajan-Penggorengan-Set-3-Stainless-Fry-Pan-Induksi.jpeg',
            'price' => 60000+114900,
            'price3'=>58300
        ]);
        DB::table('products')->insert([
            'name' => 'Jemuran aluminium 180/9 + hanger',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Jemuran-aluminium-1809+hanger.jpg',
            'price' => 60000+199999,
            'price3'=>86666
        ]);
        DB::table('products')->insert([
            'name' => 'Jemuran handuk stanless 1 meter',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Jemuran-handuk-stanless-1-meter.jpeg',
            'price' => 60000+139999,
            'price3'=>66666
        ]);
        DB::table('products')->insert([
            'name' => 'Jemuran stainless steel 180 + hanger',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Jemuran-stainless-steel-180+hanger.jpeg',
            'price' => 60000+459999,
            'price3'=>173333
        ]);
        DB::table('products')->insert([
            'name' => 'Jemuran rak handuk aluminium',
            'categories_id' => 12,
            'image' => '/katalog/perabot/Jemuran-rak-handuk-aluminium.jpeg',
            'price' => 37650+78999,
            'price3'=>38883
        ]);
    }
}
