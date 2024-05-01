<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = [
        'kd_bayar',
        'nim',
        'semester',
        'thn_ajar',
        'jml_bayar',
        'tgl_bayar',
        'mtd_bayar',
        'sts_bayar'
    ];
}