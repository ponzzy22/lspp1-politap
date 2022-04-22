@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i class="fas fa-images"></i>
            Galeri</h3>
        <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">GALERI</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- TAMPIL ALBUM ----------------------> --}}
    <div class="row">
        <div class="col-12">
            <div class="row portfolio-grid">
                @foreach ($galeri as $asu)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="{{ route('uifoto.show', $asu->id) }}">
                            <figure class="effect-text-in">
                                <img src="{{ asset('public/assets/images/auth/placeholder_image1.png') }}" alt="image">
                                <figcaption>
                                    <h4>{{ $asu->galeri }}</h4>
                                    <p>{{ $asu->created_at }}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
