<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokHarian extends Model
{
    use HasFactory;

    protected $table = 'stok_harian';

    protected $fillable = [
        'produk_id',
        'tanggal',
        'sisa_malam_pcs',
        'status_olahan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'status_olahan' => 'boolean',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function detailOpname()
    {
        return $this->hasOne(DetailStokOpname::class);
    }

    public function detailStokOpname()
    {
        return $this->hasMany(DetailStokOpname::class, 'stok_harian_id');
    }
}
