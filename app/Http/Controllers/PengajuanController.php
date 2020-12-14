<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('templates.base');
    }

    public function store(Request $request)
    {
        // echo $request->input('nama');
    }
}
