<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'nama' => 'Andi Setiawan',
                'email' => 'andi.setiawan@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://example.com/avatars/andi_setiawan.jpg',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'email' => 'siti.nurhaliza@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://example.com/avatars/siti_nurhaliza.jpg',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://example.com/avatars/budi_santoso.jpg',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ratna Dewi',
                'email' => 'ratna.dewi@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://example.com/avatars/ratna_dewi.jpg',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Eko Prasetyo',
                'email' => 'eko.prasetyo@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://example.com/avatars/eko_prasetyo.jpg',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('customers')->insert($customers);
    }
}
