<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::select('nis', 'nama', 'kelas', 'bayar_jan', 'bayar_feb', 'bayar_mar', 'bayar_apr', 'bayar_mei', 'bayar_jun', DB::raw('bayar_jan + bayar_feb + bayar_mar + bayar_apr + bayar_mei + bayar_jun as total'))->get();
        return view('pembayaran.index', compact('data'));
    }
    
    public function simpan(Request $request)
    {
        $data = new Pembayaran();
            $data->nis=$request->nis;
            $data->nama=$request->nama;
            $data->kelas=$request->kelas;
            $data->bayar_jan=$request->bayar_jan;
            $data->bayar_feb=$request->bayar_feb;
            $data->bayar_mar=$request->bayar_mar;
            $data->bayar_apr=$request->bayar_apr;
            $data->bayar_mei=$request->bayar_mei;
            $data->bayar_jun=$request->bayar_jun;  
        $data->save();
        return back();
    }


    // Edit Data
    public function edit(Request $request, int $nis)
    {
        $data = Pembayaran::where('nis', $nis);
        $data->update($request->only(['nis', 
                                        'nama', 
                                        'kelas', 
                                        'bayar_jan', 
                                        'bayar_feb', 
                                        'bayar_mar', 
                                        'bayar_apr', 
                                        'bayar_mei',
                                        'bayar_jan',
                                        ])
        );

        return back();
    }

    public function hapus(int $nis)
    {
        Pembayaran::where('nis', $nis)->delete();
 
        return back();
    }

    public function import_excel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new PembayaranImport, $file); // Skip the first row

        return back()->with('success', 'Data Barang berhasil diimpor!');
    }
}