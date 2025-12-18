<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
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
    public function index()
    {
        $daftar_barang = Barang::all();
        return view('barang.index', compact('daftar_barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required|unique:barang,item',
            'description' => 'nullable|string',
            'conversion' => 'nullable|string',
            'perpack' => 'required|integer|min:1',
            'stock' => 'integer|min:0',
        ]);

        Barang::create([
            'item' => $request->item,
            'description' => $request->description,
            'conversion' => $request->conversion,
            'perpack' => $request->perpack,
            'stock' => $request->stock,
        ]);

        return redirect()->route('daftar_barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Request $request)
    {
        $barang = Barang::findOrFail($request->id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item' => 'required|unique:barang,item,' . $id,
            'description' => 'nullable|string',
            'conversion' => 'nullable|string',
            'perpack' => 'required|integer|min:1',
            'stock' => 'integer|min:0',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'item' => $request->item,
            'description' => $request->description,
            'conversion' => $request->conversion,
            'perpack' => $request->perpack,
            'stock' => $request->stock,
        ]);

        return redirect()->route('daftar_barang')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Request $request)
    {
        $barang = Barang::findOrFail($request->id);
        $barang->delete();

        return redirect()->route('daftar_barang')->with('success', 'Barang berhasil dihapus.');
    }
}
