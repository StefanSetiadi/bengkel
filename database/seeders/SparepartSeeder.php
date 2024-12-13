<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spareparts = [
            [
                'id_sparepart' => 1,
                'nama' => 'Ban Michelin Pilot Sport',
                'harga' => 2500000,
                'jumlah' => 10,
                'deskripsi' => 'Ban premium untuk performa tinggi.',
                'image' => 'https://example.com/images/michelin_pilot_sport.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 2,
                'nama' => 'Kampas Rem Brembo',
                'harga' => 1500000,
                'jumlah' => 20,
                'deskripsi' => 'Kampas rem dengan daya henti luar biasa.',
                'image' => 'https://example.com/images/brembo_brake_pad.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 3,
                'nama' => 'Aki Yuasa',
                'harga' => 800000,
                'jumlah' => 15,
                'deskripsi' => 'Aki tahan lama dengan daya yang konsisten.',
                'image' => 'https://example.com/images/yuasa_battery.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 4,
                'nama' => 'Oli Mesin Castrol',
                'harga' => 350000,
                'jumlah' => 30,
                'deskripsi' => 'Oli mesin berkualitas tinggi untuk performa maksimal.',
                'image' => 'https://example.com/images/castrol_engine_oil.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 5,
                'nama' => 'Filter Udara K&N',
                'harga' => 500000,
                'jumlah' => 25,
                'deskripsi' => 'Filter udara performa tinggi yang dapat dicuci ulang.',
                'image' => 'https://example.com/images/kn_air_filter.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 6,
                'nama' => 'Lampu Depan Osram',
                'harga' => 700000,
                'jumlah' => 12,
                'deskripsi' => 'Lampu depan dengan pencahayaan optimal.',
                'image' => 'https://example.com/images/osram_headlight.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 7,
                'nama' => 'Busi NGK Iridium',
                'harga' => 120000,
                'jumlah' => 50,
                'deskripsi' => 'Busi iridium untuk pembakaran sempurna.',
                'image' => 'https://example.com/images/ngk_iridium_spark_plug.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 8,
                'nama' => 'Shockbreaker KYB',
                'harga' => 2000000,
                'jumlah' => 8,
                'deskripsi' => 'Shockbreaker yang memberikan kenyamanan berkendara.',
                'image' => 'https://example.com/images/kyb_shockbreaker.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 9,
                'nama' => 'Radiator Denso',
                'harga' => 1800000,
                'jumlah' => 5,
                'deskripsi' => 'Radiator berkualitas tinggi untuk pendinginan maksimal.',
                'image' => 'https://example.com/images/denso_radiator.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_sparepart' => 10,
                'nama' => 'Velg Enkei',
                'harga' => 4000000,
                'jumlah' => 7,
                'deskripsi' => 'Velg ringan untuk performa terbaik.',
                'image' => 'https://example.com/images/enkei_wheel.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('sparepart')->insert($spareparts);
    }
}
