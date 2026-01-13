<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List produk
     */
    public function index()
    {
        $produk = Produk::orderBy('nama_produk')->get();

        return view('produk.index', [
            'produk' => $produk,
        ]);
    }

    /**
     * Form tambah produk
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Simpan produk baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk'      => 'required|string|unique:produk,kode_produk',
            'nama_produk'      => 'required|string',
            'isi_per_satuan'   => 'required|integer|min:1',
            'satuan_besar'     => 'nullable|string',
            'satuan_kecil'     => 'nullable|string',
        ]);

        Produk::create([
            'kode_produk'    => $request->kode_produk,
            'nama_produk'    => $request->nama_produk,
            'isi_per_satuan' => $request->isi_per_satuan,
            'satuan_besar'   => $request->satuan_besar ?? 'Pack',
            'satuan_kecil'   => $request->satuan_kecil ?? 'Pcs',
        ]);

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Form edit produk
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produk.edit', [
            'produk' => $produk,
        ]);
        }

        /**
     * Update produk
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'kode_produk'    => 'required|string|unique:produk,kode_produk,' . $produk->id,
            'nama_produk'    => 'required|string',
            'isi_per_satuan' => 'required|integer|min:1',
            'satuan_besar'   => 'nullable|string',
            'satuan_kecil'   => 'nullable|string',
        ]);

        $produk->update([
            'kode_produk'    => $request->kode_produk,
            'nama_produk'    => $request->nama_produk,
            'isi_per_satuan' => $request->isi_per_satuan,
            'satuan_besar'   => $request->satuan_besar ?? 'Pack',
            'satuan_kecil'   => $request->satuan_kecil ?? 'Pcs',
        ]);

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Hapus produk
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // ❗ Proteksi: sudah dipakai transaksi
        if ($produk->stokHarian()->exists() || $produk->detailStokOpname()->exists()) {
            abort(403, 'Produk sudah digunakan dan tidak bisa dihapus');
        }

        $produk->delete();

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
