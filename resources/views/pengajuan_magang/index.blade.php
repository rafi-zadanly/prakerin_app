@extends('templates.base')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <div class="card">
            <form action="" method="post">
                @csrf
            <div class="card-header">Pengajuan Magang</div>

            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="nama_lengkap" disabled>
                </div>
                <div class="form-group">
                    <label for="">Kelas:</label>
                    <select name="kelas" id="" class="form-control">
                        <option value="null">Pilih Kelas...</option>
                        <option value="">XII Teknik Komputer Jaringan 1</option>
                        <option value="">XII Teknik Komputer Jaringan 2</option>
                        <option value="">XII Teknik Komputer Jaringan 3</option>
                        <option value="">XII Teknik Komputer Jaringan 4</option>
                        <option value="">XII Multimedia 1</option>
                        <option value="">XII Multimedia 2</option>
                        <option value="">XII Broadcast 1</option>
                        <option value="">XII Broadcast 2</option>
                        <option value="">XII Rekayasa Perangkat Lunak 1</option>
                        <option value="">XII Rekayasa Perangkat Lunak 2</option>
                        <option value="">XII Teknik Elektronika Industri</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Perusahaan:</label>
                    <input type="text" class="form-control" name="nama_perusahaan">
                </div>
                <div class="form-group">
                    <label for="">Alamat Perusahaan:</label>
                    <input type="text" class="form-control" name="alamat_perusahaan">
                </div>
                <div class="form-group">
                    <label for="">Nama Terkait:</label>
                    <input type="text" class="form-control" name="nama_terkait">
                </div>
                <div class="form-group">
                    <label for="">Nomor Terkait:</label>
                    <input type="number" class="form-control" name="nomor_terkait">                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection