<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalMatakuliah;

class JadwalMatakuliahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JadwalMatakuliah::all();

        return view('jadwal-matakuliah.index', compact('data'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        // If `kd_jadwal` is unique, proceed with saving data
        $data = new JadwalMatakuliah();
        $data->kd_jadwal = $request->kd_jadwal;
        $data->nama_matkul = $request->nama_matkul;
        $data->kelas = $request->kelas;
        $data->nama_dosen = $request->nama_dosen;
        $data->hari = $request->hari;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->save();

        // Display Bootstrap alert for successful addition
        $alert = "<div class='alert alert-success' role='alert'>
                        Berhasil menambahkan barang!
                    </div>";

        // Return back with the alert message
        return back()->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     */
    public function show(JadawalMatakuliah $jadwal_matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadawalMatakuliah $jadwal_matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kd_jadwal)
    {

        $data = JadwalMatakuliah::where('kd_jadwal', $kd_jadwal);
        $data->update($request->only(['kd_jadwal', 'nama_matkul', 'kelas', 'nama_dosen', 'hari', 'waktu_mulai', 'waktu_selesai']));

        return back();
    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kd_jadwal)
    {
        JadwalMatakuliah::where('kd_jadwal', $kd_jadwal)->delete();

        return back();
    }
    
}