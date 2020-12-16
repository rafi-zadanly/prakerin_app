@extends('templates/base')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="card shadow mb-4 p-3">
            <div class="container mt-4">
                <div class="step {{ $persyaratan != NULL && $persyaratan['status'] == 'Sudah' ? 'active' : '' }}">
                    <div>
                        <div class="circle">
                            <i class="fas fa-fw fa-check"></i>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div class="title">Persyaratan Magang</div>
                        <div class="body small">Tanyakan ketentuan persyaratan magangmu kepada pihak sekolah.</div>
                    </div>
                </div>
                <div class="step {{ $pengajuan != NULL ? 'active' : '' }}">
                    <div>
                        <div class="circle">
                            <i class="fas fa-fw fa-check"></i>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div class="title">Pengajuan Magang</div>
                        <div class="body small">Kamu dapat mengajukan magang atau pihak sekolah yang akan menentukan.</div>
                    </div>
                </div>
                <div class="step {{ $perjanjian != NULL && $perjanjian['status'] == 'Sudah' ? 'active' : '' }}">
                    <div>
                        <div class="circle">
                            <i class="fas fa-fw fa-check"></i>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div class="title">Perjanjian Magang</div>
                        <div class="body small">Tanda tangani surat perjanjian untuk melaksanakan proses magang.</div>
                    </div>
                </div>
                <div class="step {{ $pelaksanaan != NULL && $pelaksanaan['status'] == 'Sudah' ? 'active' : '' }}">
                    <div>
                        <div class="circle">
                            <i class="fas fa-fw fa-check"></i>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div class="title">Pelaksanaan Magang</div>
                        <div class="body small">Berlangsungnya pelaksanaan magang sesuai tempat yang diajukan.</div>
                    </div>
                </div>
                <div class="step {{ $laporan != NULL && $laporan['status'] == 'Sudah' ? 'active' : '' }}">
                    <div>
                        <div class="circle">
                            <i class="fas fa-fw fa-check"></i>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div class="title">Laporan Magang</div>
                        <div class="body small">Pengerjaan laporan untuk menyelesaikan proses magang.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection