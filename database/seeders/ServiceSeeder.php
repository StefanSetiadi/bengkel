<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'nama' => 'Ganti Oli',
                'harga' => 10,
                'kategori' => 'oli mesin',
                'deskripsi' => 320000,
                'image' => 'img/product/1.jpg'
            ],
            [
                'nama' => 'Cat Warna',
                'harga' => 10,
                'kategori' => 'oli mesin',
                'deskripsi' => 320000,
                'image' => 'img/product/1.jpg'
            ],
            [
                'nama' => 'Ganti Air Radiator',
                'harga' => 10,
                'kategori' => 'oli mesin',
                'deskripsi' => 320000,
                'image' => 'img/product/1.jpg'
            ],
            [
                'nama' => 'Ganti Ban',
                'harga' => 10,
                'kategori' => 'oli mesin',
                'deskripsi' => 320000,
                'image' => 'img/product/1.jpg'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
