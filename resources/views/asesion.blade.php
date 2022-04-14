@extends('layout/3')
@section('isi')
<div class="page-header">
    <h4>
        <i class="fas fa-user"></i>  Dashboard Asesi
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-info">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div><br>

<div class="row">
    @foreach ($datareg as $asu)
    <div class="col-md-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                        <div class="d-md-flex">
                            <h2 class="mb-0">#{{ $asu->id }}</h2>
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                <i class="far fa-calendar text-muted"></i>
                                <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                            </div>
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                <i class="far fa-clock text-muted"></i>
                                <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                            </div>
                        </div><br>
                        <div class="d-md-flex">
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                <i class="far fa-user text-muted"></i>
                                <small class=" ml-1 mb-0">Asesor:   {{ $asu->asesor->nama }}</small>
                            </div>
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                <i class="far fa-map text-muted"></i>
                                <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                &diamond;
                                <small class=" ml-1 mb-0">Keterangan:   {{ $asu->keterangan }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h4 style="color: green">{{ $asu->status }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
