<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    public function show($id)
    {
        $penjualan = DetailPenjualan::find($id);
        return view('penjualan.show', compact('penjualan'));
    }
}