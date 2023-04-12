<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
                'id_pelanggan' => 'PL001',
                'nama_pelanggan' => 'Anna',
                'alamat_pelanggan' => 'Jl. Aaman',
                'no_hp' => '082235262377'
            ],
            [
                'id_pelanggan' => 'PL002',
                'nama_pelanggan' => 'Sinta',
                'alamat_pelanggan' => 'Jl. Ayam',
                'no_hp' => '081242634262'
            ],
            [
                'id_pelanggan' => 'PL003',
                'nama_pelanggan' => 'Rahman',
                'alamat_pelanggan' => 'Jl. Jalan',
                'no_hp' => '087625326152'
            ],
            [
                'id_pelanggan' => 'PL004',
                'nama_pelanggan' => 'Mela',
                'alamat_pelanggan' => 'Jl. Pisang Madu',
                'no_hp' => '089765142571'
            ],
            [
                'id_pelanggan' => 'PL005',
                'nama_pelanggan' => 'Salma',
                'alamat_pelanggan' => 'Jl. Jepun',
                'no_hp' => '081254525271'
            ]
        ]);
    }
}
