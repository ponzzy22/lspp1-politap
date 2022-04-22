@extends('layout/1')
@include('layout/verifikasi')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i class="fas fa-bullhorn"></i>
            Pengumuman </h3>
        <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">LIST PENGUMUMAN </li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="row">
        <div class="col-lg-9 col-md-6 col-12">
            @foreach ($pengumuman as $asu)
                <div  data-aos="fade-left" data-aos-delay="300" class="card-body">
                    <div class="media">
                        <img class="mr-5 rounded" width="150px" height="100px" src="{{ asset($asu->image) }}"
                            alt="Generic placeholder image">
                        <div class="media-body text-dark">
                            <p style="font-size: 20pt" class="mt-0">{{ $asu->title }}</p>
                            <p style="font-size: 12pt" class="text text-dark">
                                {{ $asu->excerpt }}
                            </p>
                            <div class="card-header-action">
                                <a href="{{ route('berita.tampil', $asu->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                                {{ $asu->created_at->diffforhumans() }}
                            </div>
                        </div>
                    </div><br>
                </div>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div  data-aos="fade-up" data-aos-delay="300" class="card">
                <div class="card-header">
                    <h3 class="font-weight-normal text-primary"><i
                            class="fas fa-info-circle"></i>
                        Berita/Artikel
                    </h3>
                </div>
                <div class="card-body">
                    @foreach ($berita as $asu)
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <h6 class="media-title"><a href="{{ route('berita.tampil', $asu->id) }}">{{ $asu->title }}</a></h6>
                                    <div class="text-small text-primary">
                                        {{ $asu->created_at->diffforhumans() }}
                                        <div class="card"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
