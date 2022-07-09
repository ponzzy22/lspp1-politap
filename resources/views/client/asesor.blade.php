@extends('layout/client')
@section('judul')
    Asesor | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
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
@endsection

@section('isi')
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </body>
    <!-- ***** Akhir Konten ***** -->
@endsection
