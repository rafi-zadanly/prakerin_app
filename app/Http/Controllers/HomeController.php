<?php

namespace App\Http\Controllers;

use App\PelaksanaanMagang;
use App\PersyaratanMagang;
use App\PengajuanMagang;
use App\PengerjaanLaporan;
use App\SuratPerjanjian;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = [
            'persyaratan' => PersyaratanMagang::where('student_id', $request->session()->get('auth.id'))->first(),
            'pengajuan' => PengajuanMagang::where('student_id', $request->session()->get('auth.id'))->first(),
            'perjanjian' => SuratPerjanjian::where('student_id', $request->session()->get('auth.id'))->first(),
            'pelaksanaan' => PelaksanaanMagang::where('student_id', $request->session()->get('auth.id'))->first(),
            'laporan' => PengerjaanLaporan::where('student_id', $request->session()->get('auth.id'))->first()
        ];
        return view('dashboard', $data);
    }

    public function generatePDF()
    {
        $data = ['title' => 'Welcome'];

        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->stream();
    }
}
