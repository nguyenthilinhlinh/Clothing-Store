<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('product')->insert([
            [
                'product_name' => 'Blue Dress Shirt',
                'category_id' => 1,
                'price' => 29.99,
                'quantity' => 100,
                'status' => 1,
                'description' => 'Professional blue dress shirt made from high-quality cotton. Available in various sizes.'
            ],
            [
                'product_name' => 'Black Skirt',
                'category_id' => 2,
                'price' => 39.99,
                'quantity' => 75,
                'status' => 1,
                'description' => 'Elegant black skirt made from a blend of polyester and rayon. Available in various lengths.'
            ],
            [
                'product_name' => 'Red Frock',
                'category_id' => 10,
                'price' => 49.99,
                'quantity' => 50,
                'status' => 1,
                'description' => 'Stunning red frock made from lightweight chiffon fabric. Perfect for formal events and parties.'
            ],
            [
                'product_name' => 'White Polo T-Shirt',
                'category_id' => 3,
                'price' => 14.99,
                'quantity' => 250,
                'status' => 1,
                'description' => 'Classic white polo t-shirt made from breathable cotton. Available in various sizes.'
            ],
            [
                'product_name' => 'Grey P.T. Shorts',
                'category_id' => 4,
                'price' => 15.99,
                'quantity' => 200,
                'status' => 1,
                'description' => 'Sleek and comfortable grey shorts made from durable polyester. Perfect for sports and gym activities.'
            ],
            [
                'product_name' => 'Navy P.T. Track Pants',
                'category_id' => 5,
                'price' => 24.99,
                'quantity' => 125,
                'status' => 1,
                'description' => 'Soft and comfortable navy track pants with an elastic waistband and tapered leg design. Great for jogging and casual wear.'
            ],
            [
                'product_name' => 'Black Leather Belt',
                'category_id' => 6,
                'price' => 19.99,
                'quantity' => 175,
                'status' => 1,
                'description' => 'Sleek black leather belt with a silver buckle. Available in various sizes.'
            ],
            [
                'product_name' => 'Red Silk Tie',
                'category_id' => 7,
                'price' => 9.99,
                'quantity' => 150,
                'status' => 1,
                'description' => 'Stylish red silk tie with a subtle pattern. Perfect for formal occasions.'
            ],
            [
                'product_name' => 'Custom Logo Embroidery',
                'category_id' => 8,
                'price' => 14.99,
                'quantity' => 250,
                'status' => 1,
                'description' => 'Custom embroidered logo design on uniform shirts or jackets. Choose from various thread colors and placement options.'
            ],
            [
                'product_name' => 'White Crew Socks',
                'category_id' => 9,
                'price' => 4.99,
                'quantity' => 500,
                'status' => 1,
                'description' => 'Comfortable white crew socks made from a blend of cotton and polyester. Available in packs of 10.'
           ],
            [
                'product_name' => 'Navy Blue Uniform Shirt',
                'category_id' => 1,
                'price' => 24.99,
                'quantity' => 200,
                'status' => 1,
                'description' => 'Classic navy blue uniform shirt made from a durable cotton blend. Perfect for employees in a variety of industries.'
            ],
            [
                'product_name' => 'Black A-Line Skirt',
                'category_id' => 2,
                'price' => 39.99,
                'quantity' => 125,
                'status' => 1,
                'description' => 'Elegant black A-line skirt made from a comfortable stretch fabric. Available in various sizes.'
            ],
            [
                'product_name' => 'Green Wrap Dress',
                'category_id' => 10,
                'price' => 54.99,
                'quantity' => 75,
                'status' => 1,
                'description' => 'Stylish green wrap dress made from a soft and flowy fabric. Perfect for both casual and formal occasions.'
            ],
            [
                'product_name' => 'Grey Gym T-Shirt',
                'category_id' => 3,
                'price' => 12.99,
                'quantity' => 250,
                'status' => 1,
                'description' => 'Comfortable grey gym t-shirt made from a moisture-wicking fabric. Available in various sizes.'
            ],
            [
                'product_name' => 'Black Running Shorts',
                'category_id' => 4,
                'price' => 16.99,
                'quantity' => 200,
                'status' => 1,
                'description' => 'Lightweight black running shorts with built-in compression shorts for added support. Perfect for athletes and runners.'
            ],
            [
                'product_name' => 'Grey Yoga Pants',
                'category_id' => 5,
                'price' => 29.99,
                'quantity' => 125,
                'status' => 1,
                'description' => 'Stretchy grey yoga pants with a high waistband and a flattering fit. Great for yoga, pilates, and other low-impact activities.'
            ],
            [
                'product_name' => 'Brown Leather Belt',
                'category_id' => 6,
                'price' => 24.99,
                'quantity' => 175,
                'status' => 1,
                'description' => 'Stylish brown leather belt with a gold buckle. Available in various sizes.'
            ],
            [
                'product_name' => 'Blue Striped Tie',
                'category_id' => 7,
                'price' => 12.99,
                'quantity' => 150,
                'status' => 1,
                'description' => 'Classic blue striped tie made from a soft and lightweight fabric. Perfect for both casual and formal occasions.'
            ],
            [
                'product_name' => 'Custom Logo Screen Printing',
                'category_id' => 8,
                'price' => 9.99,
                'quantity' => 250,
                'status' => 1,
                'description' => 'Custom screen printed logo design on uniform t-shirts or sweatshirts. Choose from various ink colors and placement options.'
            ],
            [
                'product_name' => 'Black Ankle Socks',
                'category_id' => 9,
                'price' => 3.99,
                'quantity' => 500,
                'status' => 1,
                'description' => 'Comfortable black ankle socks made from a soft and breathable cotton blend. Available in packs of 10.'
            ]
        ]);
    }
}


            

