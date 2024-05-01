<?php

namespace App\Imports;

use App\Models\Pembayaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PembayaranImport implements ToModel, WithStartRow
{
    /**
    * @return int
    */
    public function startRow(): int
    {
        return 2; // Mulai dari baris kedua (baris pertama berisi penamaan kolom)
    }

    /**
     * @param array $row
     *
     * @return Pembayaran|null
     */
    public function model(array $row)
    {
        return new Pembayaran([
            'kd_bayar' => $row[0],
            'nim' => $row[1],
            'semester' => $row[2],
            'thn_ajar' => $row[3],
            'jml_bayar' => $row[4],
            'tgl_bayar' => $row[5],
            'mtd_bayar' => $row[6],
            'sts_bayar' => $row[7],
        ]);
    }
}