<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Baris ini penting untuk ambil data

class NilaiControllerDinda extends Controller
{
    public function index() 
    {
        // Mengambil semua data dari tabel-tabel terkait
        $dataNilai = DB::table('t_nilai_dinda')->get();
        $dataKurikulum = DB::table('t_kurikulum_dinda')->get();
        $dataKelas = DB::table('t_kelas_dinda')->get();
        $dataJadwal = DB::table('t_jadwal_dinda')->get(); 

        // Mengirimkan semua data ke satu view agar muncul dalam satu laporan
        return view('nilai_view', [
            'nilai' => $dataNilai,
            'kurikulum' => $dataKurikulum,
            'kelas' => $dataKelas,
            'jadwal' => $dataJadwal 
        ]);
    }
}