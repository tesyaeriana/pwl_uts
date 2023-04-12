<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'kode_jadwal' => 'SR001',
                'nama_pemilik' => 'Anna',
                'nama_peliharaan' => 'Ciki',
                'layanan' => 'Steril kucing',
                'tgl_msk' => '2023-04-10',
                'tgl_klr' => '2023-04-13'
            ],
            [
                'kode_jadwal' => 'GR001',
                'nama_pemilik' => 'Rahman',
                'nama_peliharaan' => 'Chiko',
                'layanan' => 'Grooming anjing',
                'tgl_msk' => '2023-04-10',
                'tgl_klr' => '2023-04-10'
            ],
            [
                'kode_jadwal' => 'SR002',
                'nama_pemilik' => 'Sinta',
                'nama_peliharaan' => 'Cemeng',
                'layanan' => 'Steril kucing',
                'tgl_msk' => '2023-04-11',
                'tgl_klr' => '2023-04-13'
            ],
            [
                'kode_jadwal' => 'VK001',
                'nama_pemilik' => 'Rahman',
                'nama_peliharaan' => 'Chiko',
                'layanan' => 'Vaksin anjing',
                'tgl_msk' => '2023-04-13',
                'tgl_klr' => '2023-04-13'
            ],
            [
                'kode_jadwal' => 'VK002',
                'nama_pemilik' => 'Mela',
                'nama_peliharaan' => 'Miko',
                'layanan' => 'Vaksin Kucing',
                'tgl_msk' => '2023-04-13',
                'tgl_klr' => '2023-04-13'
            ],
            [
                'kode_jadwal' => 'GR002',
                'nama_pemilik' => 'Salma',
                'nama_peliharaan' => 'Sepi',
                'layanan' => 'Grooming Kucing',
                'tgl_msk' => '2023-04-13',
                'tgl_klr' => '2023-04-13'
            ]
            ]);
    }
}
