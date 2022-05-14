@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="200"><i class="fas fa-building"></i>
            Profil LSP - POLITAP</h3>
        <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">PROFIL LSP - POLITAP</li>
            </ol>
        </nav>
    </div><br><br>
    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="col-12 mb-5">
        <div data-aos="zoom-in" data-aos-delay="100" class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url('public/assets/images/gedung/12.png'); position: relative;
                        background-size: cover">
            @foreach ($profil as $asu)
                <div data-aos="fade-up" data-aos-delay="200" class="hero-inner" style="padding-left: 18%"><br><br>
                    <p class="lead">{!! $asu->profil !!}</p>
                    <div class="mt-4"><br><br><br><br>
                    </div>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body" data-aos="fade-up" data-aos-delay="200">
            <p>{!! $asu->visi !!}</p>
        </div>
        <div class="card-body" data-aos="fade-up" data-aos-delay="300">
            <br><br>
            <p>{!! $asu->misi !!}</p>
            <p>{!! $asu->motto !!}</p>
        </div>
    </div>
    <br><br>
    <div class="tab-pane fade active show" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab-custom">
        <div class="media">
            <img class="mr-5 w-25 rounded" src="{{ asset($asu->image) }}" alt="image" data-aos="fade-up"
                data-aos-delay="600">
            <div class="media-body" data-aos="fade-up" data-aos-delay="600">
                <p>
                    {!! $asu->isi !!}
                </p>
            </div>
        </div><br>
        <div data-aos="fade-up" data-aos-delay="600">
        </div>
    </div><br><br>
    @endforeach
    </div><br><br><br><br><br><br><br>
    @foreach ($strorg as $asu)
        <div class="card"></div>
        <h3 class="text text-primary" data-aos="fade-up" data-aos-delay="100" style="padding-left: 36%; padding-top: 2%"
            class="text text-black">Struktur Organisasi</h3>
        <div data-aos="zoom-in" data-aos-delay="200" style="padding-left: 26%; padding-top: 10%">
            <img src="{{ $asu->image }}" width="600px" alt="">
        </div><br><br><br><br><br><br><br><div data-aos="fade-up" data-aos-delay="600">
            <br><br><br><br>
        </div>
    @endforeach
@endsection
