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
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Step Progress</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div id="svg_wrap" class="mb-5"></div>

                <div class="mb-5">
                    <section>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita deserunt nihil iste quam, quis porro vel?
                    </section>

                    <section>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, similique adipisci?
                    </section>

                    <section>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus error praesentium?</p>
                    </section>

                    <section>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corrupti voluptatum quo nisi exercitationem libero!</p>
                    </section>

                    <section>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, enim?</p>
                    </section>

                    <section>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, enim?</p>
                    </section>

                    <section>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, enim?</p>
                    </section>
                </div>

                <div class="row text-right">
                    <div class="col-12">
                        <div class="btn btn-outline-primary" id="prev">Previous</div>
                        <div class="btn btn-primary" id="next">Next</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection