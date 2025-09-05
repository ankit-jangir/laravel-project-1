<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
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
        // Truncate the table to start fresh
        DB::table('products')->truncate();

        // Use the existing images from the public/images directory
        $imageFiles = [
            'product-1.png', 'product 2.png', 'product 3.jpg', 'product 4.jpg',
            'product 5.jpg', 'product 6.jpg', 'product 7.jpg', 'product 8.png',
            'product 9.png', 'product 10.jpg', 'product 11.png', 'wire.jpg', 'plug.jpg'
        ];
        $imageCount = count($imageFiles);
        $imageIndex = 0;

        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 10; $i++) {
                // Cycle through the available images
                $image = $imageFiles[$imageIndex % $imageCount];
                $imageIndex++;

                Product::create([
                    'name' => "{$category->name} Product {$i}",
                    'description' => "This is a sample description for {$category->name} Product {$i}.",
                    'price' => rand(10, 200),
                    'image' => $image,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
