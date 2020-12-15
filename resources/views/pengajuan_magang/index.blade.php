@extends('templates.base')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <div class="card">
            <form action="/custom/pengajuan/store" method="post">
                @csrf
                <div class="card-header">Pengajuan Magang</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{ session()->get('auth.fullname') }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Perusahaan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}">
                        <div class="invalid-feedback">@error('nama_perusahaan') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Perusahaan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat_perusahaan') is-invalid @enderror" name="alamat_perusahaan" value="{{ old('alamat_perusahaan') }}">
                        <div class="invalid-feedback">@error('alamat_perusahaan') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Terkait<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_terkait') is-invalid @enderror" name="nama_terkait" value="{{ old('nama_terkait') }}">
                        <div class="invalid-feedback">@error('nama_terkait') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Terkait<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nomor_terkait') is-invalid @enderror" name="nomor_terkait" value="{{ old('nomor_terkait') }}">
                        <div class="invalid-feedback">@error('nomor_terkait') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="hidden" name="id" value="{{ session()->get('auth.id') }}">
                    @if($riwayat != NULL)
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalRiwayatPengajuan">
                        <i class="fa fa-history" aria-hidden="true"></i>
                    </a>
                    @endif
                    <button type="submit" class="btn btn-primary" {{ $riwayat != NULL ? 'disabled' : '' }}>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalRiwayatPengajuan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Riwayat Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Perusahaan</th>
                        <td>{{ $riwayat['nama_perusahaan'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Alamat Perusahaan</th>
                        <td>{{ $riwayat['alamat_perusahaan'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Nama Terkait</th>
                        <td>{{ $riwayat['nama_terkait'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Terkait</th>
                        <td>{{ $riwayat['nomor_terkait'] ?? '-' }}</td>
                    </tr>
                </table>
            </div>
            @if($riwayat['status'] == 'Belum')
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <form action="/custom/pengajuan/destroy" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $riwayat['id'] }}">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection