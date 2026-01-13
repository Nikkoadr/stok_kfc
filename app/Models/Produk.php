<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'satuan_besar',
        'isi_per_satuan',
        'satuan_kecil',
    ];

    public function stokHarian()
    {
        return $this->hasMany(StokHarian::class);
    }

    public function detailStokOpname()
    {
        return $this->hasMany(DetailStokOpname::class);
    }

    public function packToPcs(int $pack, int $pcs = 0): int
    {
        return ($pack * $this->isi_per_satuan) + $pcs;
    }

    public function pcsToPack(int $totalPcs): array
    {
        return [
            'pack' => intdiv($totalPcs, $this->isi_per_satuan),
            'pcs'  => $totalPcs % $this->isi_per_satuan,
        ];
    }
}
