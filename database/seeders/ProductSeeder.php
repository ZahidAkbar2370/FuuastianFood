<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'price' => 100,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'description' => 'Samsung Brand',
                
                
            ],
            [
                'name' => 'Apple iPhone 12',
                'price' => 500,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'description' => 'Apple Brand',
                
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'price' => 700,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                
                'description' => 'Google Pixel Brand',
                   
            ],
            [
                'name' => 'LG V10 H800',
                'price' => 200,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'description' => 'LG Brand',
                
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}