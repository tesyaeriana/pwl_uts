<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
                'kode' => 'PK001',
                'nama_produk' => 'LifeCat',
                'kategori_produk' => 'Makanan basah kucing',
                'harga' => '20000',
                'stok' => '18'
            ],
            [
                'kode' => 'SM001',
                'nama_produk' => 'Fungizol',
                'kategori_produk' => 'Sampo kucing anjing',
                'harga' => '87000',
                'stok' => '10'
            ],
            [
                'kode' => 'PK002',
                'nama_produk' => 'Royal Canin Kitten',
                'kategori_produk' => 'Makanan kering kucing',
                'harga' => '142000',
                'stok' => '21'
            ],
            [
                'kode' => 'AK001',
                'nama_produk' => 'Grooming Comb Kit',
                'kategori_produk' => 'Aksesoris',
                'harga' => '230000',
                'stok' => '15'
            ],
            [
                'kode' => 'OB',
                'nama_produk' => 'Albenworm Tablet',
                'kategori_produk' => 'Obat cacing kucing anjing',
                'harga' => '15000',
                'stok' => '30'
            ]
            ]);
    }
}
