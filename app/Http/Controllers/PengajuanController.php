<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('pengajuan_magang.index');
    }

    public function store(Request $request)
    {
        // echo $request->input('nama');
    }
}
