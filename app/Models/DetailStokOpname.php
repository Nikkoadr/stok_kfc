<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailStokOpname extends Model
{
    use HasFactory;

    protected $table = 'detail_stok_opname';

    protected $fillable = [
        'produk_id',
        'stok_harian_id',
        'isi_per_satuan',
        'stok_sistem_pcs',
        'fisik_pack_sisa',
        'fisik_pcs_sisa',
        'total_fisik_pcs',
        'selisih_pcs',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function stokHarian()
    {
        return $this->belongsTo(StokHarian::class);
    }

    public function hitungTotalFisik(): int
    {
        return ($this->fisik_pack_sisa * $this->isi_per_satuan)
            + $this->fisik_pcs_sisa;
    }

    public function hitungSelisih(): int
    {
        return $this->total_fisik_pcs - $this->stok_sistem_pcs;
    }
}
