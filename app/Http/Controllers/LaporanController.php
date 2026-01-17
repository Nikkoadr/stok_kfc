<?php

namespace App\Http\Controllers;

use App\Models\StokHarian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua tanggal unik yang sudah ada di stok_harian
        $tanggalList = StokHarian::select('tanggal')
            ->groupBy('tanggal')
            ->orderByDesc('tanggal')
            ->get();

        return view('laporan.index', compact('tanggalList'));
    }

    public function cetakPdf($tanggal)
    {
        $stokHarian = StokHarian::with(['detailStokOpname.produk'])
            ->where('tanggal', $tanggal)
            ->get();

        $pdf = Pdf::loadView('laporan.pdf', compact('stokHarian', 'tanggal'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream("Laporan_Stok_Opname_$tanggal.pdf");
    }
}
