<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\MasterBarang;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $currentMonth = date('n');
        $numberOfDays = cal_days_in_month(CAL_GREGORIAN, $currentMonth, date('Y'));
        $daysArray = array();
        for ($day = 1; $day <= $numberOfDays; $day++) {
            $daysArray[] = $day;
        }

        $totalPenjualanPerTanggal = [];

        // Menghitung total penjualan per tanggal dengan group by tgl_penjualan
        $dataPenjualan = DB::table('penjualan')
            ->selectRaw('DAY(Tgl_Penjualan) AS tanggal, SUM(Harga_Total) AS TotalPenjualan')
            ->join('detail_penjualan', 'penjualan.Id_Penjualan', '=', 'detail_penjualan.Id_Penjualan')
            ->whereMonth('Tgl_Penjualan', $currentMonth)
            ->groupBy('tanggal')
            ->get();

        // Menginisialisasi array dengan value 0 untuk setiap tanggal dalam bulan
        for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $currentMonth, date('Y')); $i++) {
            $totalPenjualanPerTanggal[$i] = 0;
        }

        // Memasukkan total penjualan per tanggal ke dalam array
            foreach ($dataPenjualan as $penjualan) {
            $tanggal = (int)$penjualan->tanggal;
            $totalPenjualanPerTanggal[$tanggal] = (float)$penjualan->TotalPenjualan;
        }

        // Mengubah hasil menjadi array tanpa kunci tanggal (indeks dimulai dari 0)
        $hasilArray = array_values($totalPenjualanPerTanggal);

        $penjualan = Penjualan::orderBy('Tgl_Penjualan', 'asc')->get();

        // Ambil nilai kategori dan masukkan dalam array
        $kategori = MasterBarang::distinct('Kategori')->orderBy('Kategori', 'asc')->pluck('Kategori')->toArray();

        // Hitung jumlah barang di setiap kategori dan masukkan dalam array baru
        $jumlahBarang = MasterBarang::select('Kategori', DB::raw('COUNT(*) as total_barang'))
        ->groupBy('Kategori')
        ->pluck('total_barang')
        ->toArray();

        $reportSales = [
        'labels'=> $daysArray,
            'datasets' => [
                [
                'label' => "Total Penjualan",
                'backgroundColor' => ["blue"],
                'data'=> $hasilArray,
                ],
            ],
        ];

        $reportGoods = [
        'labels' => $kategori,
            'datasets' => [
                [
                'label' => 'Sample Pie Chart',
                'backgroundColor' => ['red', 'blue', 'green'],
                'data' => $jumlahBarang,
                ], 
            ],
        ];

        return view('penjualan.index', compact('penjualan', 'reportSales', 'reportGoods'));
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
