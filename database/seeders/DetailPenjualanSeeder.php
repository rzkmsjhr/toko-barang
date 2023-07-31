<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    public function run()
    {
        DB::table('detail_penjualan')->insert([
            ['Id_Penjualan' => 1, 'Kode_Barang' => 101, 'Jumlah' => 2, 'Harga_Satuan' => '2.50', 'Harga_Total' => '5.00'],
            ['Id_Penjualan' => 1, 'Kode_Barang' => 102, 'Jumlah' => 3, 'Harga_Satuan' => '5.00', 'Harga_Total' => '15.00'],
            ['Id_Penjualan' => 1, 'Kode_Barang' => 105, 'Jumlah' => 1, 'Harga_Satuan' => '1.50', 'Harga_Total' => '1.50'],
            ['Id_Penjualan' => 2, 'Kode_Barang' => 103, 'Jumlah' => 4, 'Harga_Satuan' => '3.00', 'Harga_Total' => '12.00'],
            ['Id_Penjualan' => 2, 'Kode_Barang' => 104, 'Jumlah' => 2, 'Harga_Satuan' => '3.50', 'Harga_Total' => '7.00'],
            ['Id_Penjualan' => 3, 'Kode_Barang' => 101, 'Jumlah' => 1, 'Harga_Satuan' => '2.50', 'Harga_Total' => '2.50'],
            ['Id_Penjualan' => 4, 'Kode_Barang' => 105, 'Jumlah' => 3, 'Harga_Satuan' => '1.50', 'Harga_Total' => '4.50'],
            ['Id_Penjualan' => 5, 'Kode_Barang' => 102, 'Jumlah' => 2, 'Harga_Satuan' => '5.00', 'Harga_Total' => '10.00'],
            ['Id_Penjualan' => 5, 'Kode_Barang' => 103, 'Jumlah' => 1, 'Harga_Satuan' => '3.00', 'Harga_Total' => '3.00'],
            ['Id_Penjualan' => 5, 'Kode_Barang' => 104, 'Jumlah' => 4, 'Harga_Satuan' => '3.50', 'Harga_Total' => '14.00'],
            ['Id_Penjualan' => 6, 'Kode_Barang' => 101, 'Jumlah' => 5, 'Harga_Satuan' => '2.50', 'Harga_Total' => '12.50'],
            ['Id_Penjualan' => 6, 'Kode_Barang' => 102, 'Jumlah' => 3, 'Harga_Satuan' => '5.00', 'Harga_Total' => '15.00'],
            ['Id_Penjualan' => 6, 'Kode_Barang' => 105, 'Jumlah' => 2, 'Harga_Satuan' => '1.50', 'Harga_Total' => '3.00'],
            ['Id_Penjualan' => 7, 'Kode_Barang' => 103, 'Jumlah' => 1, 'Harga_Satuan' => '3.00', 'Harga_Total' => '3.00'],
            ['Id_Penjualan' => 8, 'Kode_Barang' => 104, 'Jumlah' => 2, 'Harga_Satuan' => '3.50', 'Harga_Total' => '7.00'],
            ['Id_Penjualan' => 9, 'Kode_Barang' => 101, 'Jumlah' => 3, 'Harga_Satuan' => '2.50', 'Harga_Total' => '7.50'],
            ['Id_Penjualan' => 10, 'Kode_Barang' => 102, 'Jumlah' => 4, 'Harga_Satuan' => '5.00', 'Harga_Total' => '20.00'],
            ['Id_Penjualan' => 10, 'Kode_Barang' => 105, 'Jumlah' => 1, 'Harga_Satuan' => '1.50', 'Harga_Total' => '1.50'],
        ]);
    }
}