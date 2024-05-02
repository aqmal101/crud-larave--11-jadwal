<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'bayar_jan',
        'bayar_feb',
        'bayar_mar',
        'bayar_apr',
        'bayar_mei',
        'bayar_jun',
    ];
}