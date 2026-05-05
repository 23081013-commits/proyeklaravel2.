<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkademikControllerDinda extends Controller
{
    public function kurikulum() {
        $data = DB::table('t_kurikulum_dinda')->get();
        return view('nilai_view', ['nilai' => $data]); 
    }

    public function kelas() {
        $data = DB::table('t_kelas_dinda')->get();
        return view('nilai_view', ['nilai' => $data]);
    }

    public function jadwal() {
        $data = DB::table('t_jadwal_dinda')->get();
        return view('nilai_view', ['nilai' => $data]);
    }
}