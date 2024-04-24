<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kd_jadwal',
        'nama_matkul',
        'kelas',
        'nama_dosen',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
    ];
}