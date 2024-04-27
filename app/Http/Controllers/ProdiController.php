<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $data = Prodi::all();
        return view('prodi.index', compact('data'));
    }

    public function simpan(Request $request)
    {
        $data = new Prodi();
            $data->kode_prodi=$request->kode_prodi;
            $data->nama_prodi=$request->nama_prodi;
            
        $data->save();
        return back();
    }

    public function edit(Request $request, string $kode_prodi)
    {

        $data = Prodi::where('kode_prodi', $kode_prodi);
        $data->update($request->only(['kode_prodi', 'nama_prodi']));

        return back();
    }

    public function hapus(string $kode_prodi)
    {
        Prodi::where('kode_prodi', $kode_prodi)->delete();
 
        return back();
    }
    
}