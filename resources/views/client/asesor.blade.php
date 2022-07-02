@extends('layout/client')
@section('judul')
    Asesor | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
<<<<<<< HEAD
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

        .hm-gradient {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #ffe3ee 100%);
        }

        .shadow {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06) !important;
        }

        .main-content {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 125px;
            background-color: #b40404c3;
            background-position: center;
            background-size: cover;
        }

        .img-circle {
            height: 150px;
            width: 150px;
            border-radius: 150px;
            border: 3px solid #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .social-links a {
            transition: all 0.2s;
        }

        .social-links a img {
            height: 30px;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }
    </style>
=======
    <link rel="stylesheet" href="{{ asset('client/Asesor.css') }}">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-users"></i> Asesor </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Asesor -->

    <body class="hm-gradient">
        <section class="main-content">
            <div class="container">
                <div class="row">
                    @foreach ($asesor as $asu)
                        <div class="col-md-4">
                            <div
                                class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden">
                                <div class="banner"></div>
                                @if ($asu->image)
                                    <img src="{{ asset($asu->image) }}" alt="" class="img-circle mx-auto mb-3">
                                @else
                                    <img src="{{ asset('general/assets/images/photo.jpg') }}" alt=""
                                        class="img-circle mx-auto mb-3">
                                @endif
                                <h3 class="mb-4">{{ $asu->nama }}</h3>
                                <div class="text-left mb-4">
                                    <p class="mb-2"><i class="fa fa-code mr-2"></i> Kode : {{ $asu->nik }} </p>
                                    <p class="mb-2"><i class="fa fa-whatsapp mr-2"></i> Whatsapp : </p>
                                    <p class="mb-2"><i class="fa fa-envelope mr-2"></i> Email : </p>
                                    <p class="mb-2"><i class="fa fa-pagelines mr-2"></i> Skema : {{ $asu->skema }}</p>
                                </div>
                                <div class="social-links d-flex justify-content-center">
                                    <a href="#!" class="mx-2"><i class="fa fa-facebook"></i></a>
                                    <a href="#!" class="mx-2"><i class="fa fa-instagram"></i></a>
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-9790">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-icon-1"><img
                                            src="{{ asset('images/logo4/3126647.png') }}" alt=""></span>&nbsp;Data
                                    Asesor
                                </h1>
                                <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_3a80">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($asesor as $asu)
                        <div class="u-align-center-xs u-container-style u-list-item u-repeater-item"
                            data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
                            <div class="u-container-layout u-similar-container u-valign-top-xs u-container-layout-1">
                                @if ($asu->image)
                                <img alt="{{ asset($asu->image) }}" class="u-image u-image-circle u-image-1" data-image-width="864"
                                data-image-height="1080">
                                @else
                                <img src="{{ asset('images/back/photo.png') }}" alt="" class="u-image u-image-circle u-image-1" data-image-width="864"
                                    data-image-height="1080">
                                @endif

                                <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
                                    <div class="u-container-layout u-container-layout-2">
                                        <h4 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-1">
                                            {{ $asu->nama }}
                                        </h4>
                                        <p class="u-text u-text-2">{{ $asu->nik }}</p>
                                        <p class="u-text u-text-3">{{ $asu->skema }}</p>
                                    </div>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
<<<<<<< HEAD
        </section>
    </body>
    <!-- ***** Akhir Konten ***** -->
=======
        </div>
    </section>
<br><br><br>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
