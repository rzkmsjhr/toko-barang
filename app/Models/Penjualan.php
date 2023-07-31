<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'Id_Penjualan';

    public function detailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'Id_Penjualan');
    }
}