@extends('templates/base')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Status Siswa</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="card shadow mb-4 p-3">
            <div class="step active">
                <div>
                    <div class="circle active"></div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="title">Pembekalan Magang</div>
                </div>
            </div>
            <div class="step active">
                <div>
                    <div class="circle active"></div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="title">Pengajuan Magang</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="title">Pengajuan Magang</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection