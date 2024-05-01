<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PembayaranImport;

class PembayaranController extends Controller
{
    // menampilkan 
    public function index()
    {
        $data = Pembayaran::all();
        return view('pembayaran.index', compact('data'));
    }

    //simpan data
    public function simpan(Request $request)
    {
        $data = new Pembayaran();
            $data->kd_bayar=$request->kd_bayar;
            $data->nim=$request->nim;
            $data->semester=$request->semester;
            $data->thn_ajar=$request->thn_ajar;
            $data->jml_bayar=$request->jml_bayar;
            $data->tgl_bayar=$request->tgl_bayar;
            $data->mtd_bayar=$request->mtd_bayar;
            $data->sts_bayar=$request->sts_bayar;
            
        $data->save();
        return back();
    }


    // Edit Data
    public function edit(Request $request, int $kd_bayar)
    {
        $data = Prodi::where('kd_bayar', $kd_bayar);
        $data->update($request->only(['kd_bayar', 
                                        'nim', 
                                        'semester', 
                                        'thn_ajar', 
                                        'jml_bayar', 
                                        'tgl_bayar', 
                                        'mtd_bayar', 
                                        'sts_bayar'])
        );

        return back();
    }

    // hapus data
    public function hapus(int $kd_bayar)
    {
        Prodi::where('kd_bayar', $kd_bayar)->delete();
 
        return back();
    }

    public function import_excel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new PembayaranImport, $file); // Skip the first row

        return back()->with('success', 'Data Barang berhasil diimpor!');
    }
}