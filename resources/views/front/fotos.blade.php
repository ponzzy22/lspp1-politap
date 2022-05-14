@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i class="fas fa-images"></i>
            {{ $galeri->galeri }}</h3>
        <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">GALERI</li>
                <li class="breadcrumb-item active" aria-current="page">FOTO</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- TAMPIL ALBUM ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row portfolio-grid">
                        @foreach ($galeri->galeri_fotos as $foto)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <figure class="effect-text-in">
                                    <div class="row">
                                        <img src="{{ asset($foto->image) }}" alt="image">
                                    </div>
                                    <figcaption>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
