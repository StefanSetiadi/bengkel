<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sparepart;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id_service' => '1',
                'nama' => 'Oli 1',
                'harga' => 10,
                'jumlah' => 10,
                'kategori' => 320000,
                'deskripsi' => 'deskripsi',
                'image' => 'img/product/1.jpg'
            ],
            [
                'id_service' => '1',
                'nama' => 'Oli 2',
                'harga' => 10,
                'jumlah' => 10,
                'kategori' => 320000,
                'deskripsi' => 'deskripsi',
                'image' => 'img/product/1.jpg'
            ],
            [
                'id_service' => '1',
                'nama' => 'Oli 3',
                'harga' => 10,
                'jumlah' => 10,
                'kategori' => 320000,
                'deskripsi' => 'deskripsi',
                'image' => 'img/product/1.jpg'
            ],
            [
                'id_service' => '1',
                'nama' => 'Oli 4',
                'harga' => 10,
                'jumlah' => 10,
                'kategori' => 320000,
                'deskripsi' => 'deskripsi',
                'image' => 'img/product/1.jpg'
            ],
            [
                'id_service' => '1',
                'nama' => 'Oli 5',
                'harga' => 10,
                'jumlah' => 10,
                'kategori' => 320000,
                'deskripsi' => 'deskripsi',
                'image' => 'img/product/1.jpg'
            ],
        ];

        foreach ($products as $product) {
            Sparepart::create($product);
        }
    }
}
