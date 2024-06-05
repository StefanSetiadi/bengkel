<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Starter Parts Car',
                'quantity' => 10,
                'price' => 320000,
                'image' => 'img/product1.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Three Ball Bearing',
                'quantity' => 10,
                'price' => 1210000,
                'image' => 'img/product2.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Disk Brake',
                'quantity' => 10,
                'price' => 900000,
                'image' => 'img/product3.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Car Exhaust Pipe',
                'quantity' => 10,
                'price' => 250000,
                'image' => 'img/product4.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Disk Brake Pad',
                'quantity' => 10,
                'price' => 320000,
                'image' => 'img/product5.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Wheel With Tire',
                'quantity' => 10,
                'price' => 320000,
                'image' => 'img/product6.jpg',
                'description' => 'description'
            ],
            [
                'name' => 'Car Suspension',
                'quantity' => 10,
                'price' => 320000,
                'image' => 'img/product7.jpg',
                'description' => 'description'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
