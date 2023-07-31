<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('master_barang')->insert([
            ['Kode_Barang' => 101, 'Nama_Barang' => 'Pensil', 'Harga_Jual' => '2.50', 'Harga_Beli' => '1.00', 'Stok' => 100, 'Kategori' => 'Alat Tulis'],
            ['Kode_Barang' => 102, 'Nama_Barang' => 'Buku Tulis', 'Harga_Jual' => '5.00', 'Harga_Beli' => '2.50', 'Stok' => 50, 'Kategori' => 'Alat Tulis'],
            ['Kode_Barang' => 103, 'Nama_Barang' => 'Penggaris', 'Harga_Jual' => '3.00', 'Harga_Beli' => '1.50', 'Stok' => 75, 'Kategori' => 'Alat Tulis'],
            ['Kode_Barang' => 104, 'Nama_Barang' => 'Bolpoin', 'Harga_Jual' => '3.50', 'Harga_Beli' => '1.75', 'Stok' => 60, 'Kategori' => 'Alat Tulis'],
            ['Kode_Barang' => 105, 'Nama_Barang' => 'Penghapus', 'Harga_Jual' => '1.50', 'Harga_Beli' => '0.75', 'Stok' => 90, 'Kategori' => 'Alat Tulis'],
            ['Kode_Barang' => 106, 'Nama_Barang' => 'Mouse', 'Harga_Jual' => '25.00', 'Harga_Beli' => '15.00', 'Stok' => 30, 'Kategori' => 'Perangkat Komputer'],
            ['Kode_Barang' => 107, 'Nama_Barang' => 'Keyboard', 'Harga_Jual' => '30.00', 'Harga_Beli' => '20.00', 'Stok' => 25, 'Kategori' => 'Perangkat Komputer'],
            ['Kode_Barang' => 108, 'Nama_Barang' => 'Monitor', 'Harga_Jual' => '150.00', 'Harga_Beli' => '100.00', 'Stok' => 10, 'Kategori' => 'Perangkat Komputer'],
            ['Kode_Barang' => 109, 'Nama_Barang' => 'Headset', 'Harga_Jual' => '20.00', 'Harga_Beli' => '12.00', 'Stok' => 40, 'Kategori' => 'Aksesoris Komputer'],
            ['Kode_Barang' => 110, 'Nama_Barang' => 'Webcam', 'Harga_Jual' => '35.00', 'Harga_Beli' => '25.00', 'Stok' => 20, 'Kategori' => 'Aksesoris Komputer'],
        ]);
    }
}
