<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        DB::table('penjualan')->insert([
            ['Id_Penjualan' => 1, 'Tgl_Penjualan' => '2023-07-01', 'Nama_Konsumen' => 'John Doe', 'Alamat' => 'Jl. Merdeka No. 123'],
            ['Id_Penjualan' => 2, 'Tgl_Penjualan' => '2023-07-15', 'Nama_Konsumen' => 'Jane Smith', 'Alamat' => 'Jl. Jendral Sudirman No. 456'],
            ['Id_Penjualan' => 3, 'Tgl_Penjualan' => '2023-07-20', 'Nama_Konsumen' => 'Bob Johnson', 'Alamat' => 'Jl. Ahmad Yani No. 789'],
            ['Id_Penjualan' => 4, 'Tgl_Penjualan' => '2023-07-25', 'Nama_Konsumen' => 'Alice Brown', 'Alamat' => 'Jl. Gatot Subroto No. 321'],
            ['Id_Penjualan' => 5, 'Tgl_Penjualan' => '2023-07-03', 'Nama_Konsumen' => 'David Lee', 'Alamat' => 'Jl. Sisingamangaraja No. 654'],
            ['Id_Penjualan' => 6, 'Tgl_Penjualan' => '2023-07-10', 'Nama_Konsumen' => 'Sarah Davis', 'Alamat' => 'Jl. Diponegoro No. 987'],
            ['Id_Penjualan' => 7, 'Tgl_Penjualan' => '2023-07-12', 'Nama_Konsumen' => 'Michael Wilson', 'Alamat' => 'Jl. Pangeran Dipanegara No. 147'],
            ['Id_Penjualan' => 8, 'Tgl_Penjualan' => '2023-07-20', 'Nama_Konsumen' => 'Emily Taylor', 'Alamat' => 'Jl. Sudirman Kav. 123'],
            ['Id_Penjualan' => 9, 'Tgl_Penjualan' => '2023-07-28', 'Nama_Konsumen' => 'Daniel Clark', 'Alamat' => 'Jl. Thamrin No. 456'],
            ['Id_Penjualan' => 10, 'Tgl_Penjualan' => '2023-07-31', 'Nama_Konsumen' => 'Olivia Martinez', 'Alamat' => 'Jl. Kebon Sirih No. 789'],
        ]);
    }
}