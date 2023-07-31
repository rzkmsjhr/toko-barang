<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $primaryKey = 'Id_Penjualan';

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'Id_Penjualan');
    }

    public function barang()
    {
        return $this->belongsTo(MasterBarang::class, 'Kode_Barang', 'Kode_Barang');
    }
}