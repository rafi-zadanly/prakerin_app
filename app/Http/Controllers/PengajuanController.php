<?php

namespace App\Http\Controllers;

use App\PengajuanMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    private $customMessage = [
        'required' => ':attribute harus di-isi.',
        'numeric' => ':attribute harus berupa angka.',
        'min' => ':attribute tidak boleh kurang dari :min karakter.'
    ];

    public function index(Request $request)
    {
        $riwayatPengajuan = PengajuanMagang::where('student_id', $request->session()->get('auth.id'))->first();
        $data = [
            'riwayat' => $riwayatPengajuan
        ];
        return view('pengajuan_magang.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Validator::validate($data, [
            'nama_perusahaan' => ['required'],
            'alamat_perusahaan' => ['required'],
            'nama_terkait' => ['required', 'min:4'],
            'nomor_terkait' => ['required', 'numeric'],
        ], $this->customMessage);

        $pengajuanMagang = new PengajuanMagang([
            'student_id' => $data['id'],
            'nama_perusahaan' => $data['nama_perusahaan'],
            'alamat_perusahaan' => $data['alamat_perusahaan'],
            'nama_terkait' => $data['nama_terkait'],
            'nomor_terkait' => $data['nomor_terkait']
        ]);

        if ($pengajuanMagang->save()) {
            return redirect()
                ->back()
                ->with('status', 'Berhasil mengajukan magang.')
                ->with('type', 'success');
        } else {
            return redirect()
                ->back()
                ->with('status', 'Gagal mengajukan magang.')
                ->with('type', 'danger');
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $delete = PengajuanMagang::find($id)->delete();

        if ($delete) {
            return redirect()
                ->back()
                ->with('status', 'Berhasil menghapus pengajuan magang sebelumnya.')
                ->with('type', 'success');
        } else {
            return redirect()
                ->back()
                ->with('status', 'Gagal menghapus pengajuan magang sebelumnya.')
                ->with('type', 'danger');
        }
    }
}
