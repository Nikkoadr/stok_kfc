<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDetail;
use Illuminate\Support\Facades\DB;

class HitungController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function create()
    {
        $barangs = Barang::orderBy('item')->get();
        return view('hitung.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {

            $laporan = Laporan::create([
                'tanggal_laporan' => now()->toDateString(),
                'jam_laporan'     => now()->toTimeString(),
            ]);

            foreach ($request->barang_id as $index => $barangId) {
                $query = $request->query_stok_card[$index];
                $fisik = $request->fisik_barang[$index];

                LaporanDetail::create([
                    'laporan_id'        => $laporan->id,
                    'barang_id'         => $barangId,
                    'query_stok_card'   => $query,
                    'fisik_barang'      => $fisik,
                    'selisih'           => $fisik - $query,
                ]);
            }
        });

        return redirect()->back()->with('success', 'Stock opname berhasil disimpan');
    }
}
