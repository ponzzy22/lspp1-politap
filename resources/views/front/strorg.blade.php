@extends('layout/1')
@include('layout/verifikasi')
@section('isi')

<div class="page-header">
    <h3>
    <i class="fas fa-users"></i> Struktur Organisasi LSP P1-POLITAP
    </h3>

    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
            {{-- <li class="breadcrumb-item">
                <a href="#"> </a>
            </li> --}}
            <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
        </ol>
    </nav>
</div><br>

    <!-- /////////////////////////////////// -->
    <!-- MAIN WEB -->
    <!-- /////////////////////////////////// -->
@foreach ($strorg as $asu)
<div class="card">
    <div class="card-body">
        <img src="{{ asset($asu->image) }}" width="500px" style="position: relative" alt="image small">
    </div>
</div>
@endforeach
@endsection