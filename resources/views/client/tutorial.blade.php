@extends('layout.client')
@section('judul')
    Prosedur Sertifikasi | LSP POLITAP
@endsection
<<<<<<< HEAD

@section('layanan')
    active
=======
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Tutorial.css') }}" media="screen">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-pencil-square"></i> Prosedur Pendaftaran Sertifikasi </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Gambar -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($tutorial2 as $asu)
                                @if ($asu->image)
                                    <img src="{{ $asu->image }}" width="100%">
                                @else
                                    <h1 class="text-danger">TIDAK ADA GAMBAR</h1>
                                @endif
                            @endforeach
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-ceb4">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img
                                            src="{{ asset('images/logo4/ewer.png') }}" alt=""></span>Prosedur
                                    Pendaftaran Sertifikasi
                                </h1>
                                <div class="u-border-3 u-border-custom-color-1 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
                            </div>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div><br>

    <!-- Video -->
    <div id="logo" class="more-info about-info">
        <div class="container">

            <div class="section-heading">
                <h2>Video Tutorial <em>Pendaftaran Sertifikasi </em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($tutorial as $asu)
                                @if ($asu->image)
                                    <video width="100%" controls>
                                        <source src="{{ $asu->image }}" type="video/mp4">
                                        Your browser does not support HTML video.
                                    </video>
                                @else
                                    <h1 class="text-danger">TIDAK ADA VIDEO</h1>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- ***** Akhir Konten ***** -->
=======
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-9399">
        @foreach ($tutorial2 as $asu)
            <img src="{{ $asu->image }}" width="75%" alt="">
        @endforeach
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-video u-video-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000">
                @foreach ($tutorial as $asu)
                    <div class="embed-responsive embed-responsive-1">
                        <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                            class="embed-responsive-item" src="{{ asset($asu->image) }}" frameborder="0"
                            allowfullscreen=""></iframe>
                    </div>
                @endforeach
            </div>
            <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000">Video Tutorial Pendaftaran
                Sertifikasi</h2>
        </div>
    </section>

>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
