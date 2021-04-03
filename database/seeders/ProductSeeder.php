<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Mobile',
                'price' => '200',
                'category' => 'Mobile',
                'description' => 'A smart Phone With 4GB RAM',
                'gallery' => 'https://i.gadgets360cdn.com/products/large/1555507135_635_samsung_galaxy_a60.jpg',
            ],
            [
                'name' => 'Samsung TV',
                'price' => '100',
                'category' => 'TV',
                'description' => 'A smart TV With 4GB RAM',
                'gallery' => 'https://images.samsung.com/is/image/samsung/in-full-hd-tv-t5770-ua43t5770aubxl-ua--r----auxxl-227140883?$720_576_PNG$',
            ],
            [
                'name' => 'Xiaomi Mobile',
                'price' => '50',
                'category' => 'Mobile',
                'description' => 'A smart Phone With 4GB RAM',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10t-5g-.jpg',
            ],
            [
                'name' => 'Toshiba TV',
                'price' => '350',
                'category' => 'TV',
                'description' => 'A smart TV With 4GB RAM',
                'gallery' => 'https://www.elarabygroup.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/o/toshiba-smart-tv-43-inch-full-hd-d-led-with-3-hdmi-and-2-usb-43l5780ev-zoom.jpg',
            ]
        ]);
    }
}
