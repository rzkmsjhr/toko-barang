<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);

        if (!$penjualan) {
            return redirect()->route('penjualan.index')->with('error', 'Penjualan not found.');
        }

        return view('penjualan.show', compact('penjualan'));
    }
}
