<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->insert([
            [
                'nama' => 'Inthania Nadicika',
                'jabatan' => 'Admin',
                'alamat' => 'Jl. Piskip no.30',
                'hp' => '085755252327',
                'gaji' => '4.000.000'
            ],
            [
                'nama' => 'Tesya Eriana',
                'jabatan' => 'Admin',
                'alamat' => 'Jl. Pingjah no.10',
                'hp' => '089752724167',
                'gaji' => '4.000.000'
            ],
            [
                'nama' => 'drh. Budi Winanti',
                'jabatan' => 'Dokter Hewan',
                'alamat' => 'Jl. Imam Bonjol',
                'hp' => '081232516267',
                'gaji' => '7.000.000'
            ],
            [
                'nama' => 'Dian Sastro',
                'jabatan' => 'Perawat Hewan',
                'alamat' => 'Jl. I Gusti Ngurahrai',
                'hp' => '082346162772',
                'gaji' => '5.000.000'
            ],
            [
                'nama' => 'Donny Wahyu',
                'jabatan' => 'Groomer',
                'alamat' => 'Jl. Jakarta',
                'hp' => '085755252327',
                'gaji' => '3.500.000'
            ]
            ]);
    }
}
