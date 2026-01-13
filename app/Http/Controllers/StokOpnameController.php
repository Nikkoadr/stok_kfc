<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\StokHarian;
use App\Models\DetailStokOpname;
use Illuminate\Http\Request;

class StokOpnameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Form opname
     */
    public function index(Request $request)
    {
        // tanggal dari view (fallback hari ini)
        $tanggal = $request->tanggal ?? now()->toDateString();

        $produk = Produk::all();

        foreach ($produk as $item) {

            $stokHariIni = StokHarian::where('produk_id', $item->id)
                ->where('tanggal', $tanggal)
                ->first();

            if (!$stokHariIni) {

                $stokTerakhir = StokHarian::where('produk_id', $item->id)
                    ->where('tanggal', '<', $tanggal)
                    ->orderBy('tanggal', 'desc')
                    ->first();

                StokHarian::create([
                    'produk_id'      => $item->id,
                    'tanggal'        => $tanggal,
                    'sisa_malam_pcs' => $stokTerakhir?->sisa_malam_pcs ?? 0,
                ]);
            }
        }

        $produk = Produk::with(['stokHarian' => function ($q) use ($tanggal) {
            $q->where('tanggal', $tanggal);
        }])->get();

        return view('stok_opname.index', compact('produk', 'tanggal'));
    }

    /**
     * Simpan hasil opname
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'            => 'required|date',
            'produk_id.*'       => 'required|exists:produk,id',
            'fisik_pack_sisa.*' => 'required|integer|min:0',
            'fisik_pcs_sisa.*'  => 'required|integer|min:0',
        ]);

        $tanggal = $request->tanggal;

        foreach ($request->produk_id as $i => $produkId) {

            $produk = Produk::findOrFail($produkId);

            $stokHarian = StokHarian::where('produk_id', $produkId)
                ->where('tanggal', $tanggal)
                ->firstOrFail();

            $stokSistem = $stokHarian->sisa_malam_pcs;

            $fisikPack = $request->fisik_pack_sisa[$i];
            $fisikPcs  = $request->fisik_pcs_sisa[$i];

            $totalFisikPcs =
                ($fisikPack * $produk->isi_per_satuan) + $fisikPcs;

            $selisihPcs = $totalFisikPcs - $stokSistem;

            DetailStokOpname::updateOrCreate([
                'stok_harian_id'  => $stokHarian->id,
                'produk_id'       => $produkId,
                'isi_per_satuan'  => $produk->isi_per_satuan,
                'stok_sistem_pcs' => $stokSistem,
                'fisik_pack_sisa' => $fisikPack,
                'fisik_pcs_sisa'  => $fisikPcs,
                'total_fisik_pcs' => $totalFisikPcs,
                'selisih_pcs'     => $selisihPcs,
            ]);

            // update stok untuk hari itu
            $stokHarian->update([
                'sisa_malam_pcs' => $totalFisikPcs,
            ]);
        }

        return redirect()
            ->route('stok-opname.index', ['tanggal' => $tanggal])
            ->with('success', 'Stok opname berhasil disimpan');
    }
}
