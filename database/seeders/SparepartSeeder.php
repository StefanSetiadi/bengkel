<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sparepart;
use App\Models\Services;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'nama' => 'Oli Mesin',
                'biaya_jasa' => 100000,
                'image' => 'img/service/1.jpg'
            ],
            [
                'nama' => 'Oli Gardan',
                'biaya_jasa' => 100000,
                'image' => 'img/service/2.jpg'
            ],
            [
                'nama' => 'Filter Oli',
                'biaya_jasa' => 100000,
                'image' => 'img/service/3.jpg'
            ],
            [
                'nama' => 'Ban',
                'biaya_jasa' => 100000,
                'image' => 'img/service/4.jpg'
            ],
            [
                'nama' => 'AC',
                'biaya_jasa' => 100000,
                'image' => 'img/service/5.jpg'
            ],

        ];

        foreach ($services as $service) {
            Services::create($service);
        }


        //sparepart

        $spareparts = [
            [
                'id_kategori_service' => '1',
                'nama' => 'Oli 1',
                'harga' => 10,
                'jumlah' => 10,
                'deskripsi' => 'deskripsi',
                'image' => 'img/sparepart/1.jpg'
            ]
        ];

        foreach ($spareparts as $sparepart) {
            Sparepart::create($sparepart);
        }
    }
}
