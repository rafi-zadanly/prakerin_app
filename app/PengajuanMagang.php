<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PengajuanMagang extends Model
{
    protected $fillable = [
        'student_id',
        'nama_perusahaan',
        'alamat_perusahaan',
        'nama_terkait',
        'nomor_terkait'
    ];
}
