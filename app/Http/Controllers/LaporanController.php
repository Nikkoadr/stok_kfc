<?php

namespace App\Http\Controllers;

use App\Models\DetailStokOpname;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {

        return view('laporan.index');
    }

    public function exportPdf($tanggal)
    {
        $data = DetailStokOpname::with('produk')
            ->where('tanggal', $tanggal)
            ->get();

        $pdf = PDF::loadView('laporan.pdf', compact('data', 'tanggal'));
        return $pdf->download("laporan_opname_$tanggal.pdf");
    }
}
