<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok_harian extends Model
{
    protected $table = 'stok_harian';

    protected $fillable = [
        'produk_id',
        'tanggal',
        'sisa_malam_pcs',
        'status_olahan',
    ];
}
