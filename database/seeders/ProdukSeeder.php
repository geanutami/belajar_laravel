<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
        'id' => '1',
        'id_kategori' => 'makanan',
        'nama_produk' => 'Indomie Goreng',
        'harga_beli' => '2500',
        'harga_jual' => '3000',
        'diskon' => '0',
        'stok' => '5',
        ]);
    }
}
