<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data=Mahasiswa::all();
        return view("mahasiswa",compact("data"));
    }
    
    public function simpan(Request $request)
    {
        $data=new Mahasiswa();
            $data->nim=$request->nim;
            $data->nama=$request->nama;
            $data->angkatan=$request->angkatan;
            $data->prodi=$request->prodi;
            $data->fakultas=$request->fakultas;
        $data->save();
        return back();
    }

}
