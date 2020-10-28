<?php

use Illuminate\Database\Seeder;

class PulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Telkomsel Start
        DB::table('products')->insert([
            'name' => 'Pulsa 5.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 6300+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 10.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 10200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 15.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 15200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 20.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 20200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 25.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 25200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 30.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 30200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 40.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 40000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 50.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 50200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 75.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 75000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 100.000 (Telkomsel)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-C64gdRuVaJM/XW4zTQRSZgI/AAAAAAAABAg/mrYpbD-rYkkmIzv9PZRaK99pDvhpueCLwCLcBGAs/s1600/Logo%2BTelkomsel%2BTerbaru.png',
            'price' => 100000+300,
        ]);
        // Telkomsel End
        // XL Start
        DB::table('products')->insert([
            'name' => 'Pulsa 5.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 5900+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 10.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 11300+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 15.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 15250+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 25.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 24950+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 30.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 31000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 50.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 49750+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 100.000 (XL)',
            'categories_id' => 15,
            'image' => 'https://1.bp.blogspot.com/-Ds04YIjVCmM/Xd3y4KxTIxI/AAAAAAAABOo/Z40b0amGhbkfZltifw49nh2ctcvECHMsgCLcBGAsYHQ/s1600/Logo%2BXL%2Baxiata.png',
            'price' => 99300+300,
        ]);
        // XL End
        // 3 Start
        DB::table('products')->insert([
            'name' => 'Pulsa 1.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 1250+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 2.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 2200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 5.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 5350+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 10.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 10600+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 15.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 14900+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 20.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 19750+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 25.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 24900+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 50.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 49200+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 100.000 (Tri)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-CxKEE8Uv7Kg/W_VsSrzz9yI/AAAAAAAAKqE/W6-iHnqlOWIemQzA0LqyOdC-jtIPDIFTwCLcBGAs/s1600/3%2Bcubelogo.blogspot.com.png',
            'price' => 98500+300,
        ]);
        // 3 End
        // SmartFren Start
        DB::table('products')->insert([
            'name' => 'Pulsa 5.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 5300+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 10.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 10350+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 20.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 20000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 25.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 25000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 50.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 49750+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 100.000 (Smartfren)',
            'categories_id' => 15,
            'image' => 'https://2.bp.blogspot.com/-XRw3QGNrpLw/XApJGcaQ90I/AAAAAAAAQs0/KG0ZBJaCeY81So_DyrdcH3R7wg9MvPW2wCLcBGAs/s1600/Smartfren.png',
            'price' => 99500+300,
        ]);
        // SmartFren End
               
        // Indosat Ooredo Start
        DB::table('products')->insert([
            'name' => 'Pulsa 5.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 6250+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 10.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 11000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 12.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 12300+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 20.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 20000+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 25.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 24950+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 30.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 29850+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 50.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 49250+300,
        ]);
        DB::table('products')->insert([
            'name' => 'Pulsa 100.000 (Indosat Ooredoo)',
            'categories_id' => 15,
            'image' => 'https://idcamp.indosatooredoo.com/images/indosat-logo.png',
            'price' => 98500+300,
        ]);
        // Indosat Ooredo End 
    }
}
