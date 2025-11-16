<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::insert([
            [
                'name'=>'iPhone 14 Pro',
                'description'=>'Apple A16 Bionic, 6.1-inch, 128GB',
                'price'=>189900.00,
                'image_url'=>'https://appleasia.lk/cdn/shop/files/6.jpg?v=1750209999&width=1000'
            ],
            [
                'name'=>'Samsung Galaxy S23',
                'description'=>'Snapdragon 8 Gen 2, 6.1-inch, 128GB',
                'price'=>193990.00,
                'image_url'=>'https://smartmobile.lk/image/cache/catalog/Samsung%20Galaxy%20S23-500x500.jpg'
            ],
            [
                'name'=>'Google Pixel 7',
                'description'=>'Google Tensor G2, 6.3-inch OLED, 128GB',
                'price'=>99990.00,
                'image_url'=>'https://lifemobile.lk/wp-content/uploads/2022/10/Google-Pixel-7.png'
            ],
            [
                'name'=>'OnePlus 11',
                'description'=>'Snapdragon 8 Gen 2, 6.7-inch, 256GB',
                'price'=>214990.00,
                'image_url'=>'https://smartmobile.lk/image/cache/catalog/OnePlus%2011-500x500.jpg'
            ],
            [
                'name'=>'Xiaomi 13 Pro',
                'description'=>'Snapdragon 8 Gen 2, 6.73-inch AMOLED, 256GB',
                'price'=>119089.00,
                'image_url'=>'https://rentoza.co.za/cdn/shop/files/RedmiNote13Problackfrontrear.png?v=1737467290'
            ],
            [
                'name'=>'ASUS ROG Phone 7',
                'description'=>'Gaming phone, SD 8 Gen 2, 12GB RAM 2256GB 6000mAh battery',
                'price'=>264571.00,
                'image_url'=>'https://lifemobile.lk/wp-content/uploads/2023/06/asus.jpg'
            ],
            [
                'name'=>'Vivo X90 Pro',
                'description'=>'ZEISS optics, flagship performance',
                'price'=>253890.00,
                'image_url'=>'https://mobilemall.pk/public_html/images/product/product_1669310282vivo-x90-pro.jpg'
            ],
        ]);
    }
}
