@extends('layout.client')
@section('judul')
    Struktur | LSP POLITAP
@endsection
<<<<<<< HEAD

@section('profil')
    active
=======
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Pengelola.css') }}" media="screen">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Struktur Organisasi</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Koten ***** -->
    <!-- Logo -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($struktur as $asu)
                                <img src="{{ asset($asu->image) }}" width="100%" alt="">
                            @endforeach
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-e83b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img
                                            src="{{ asset('images/logo4/erwre (1).png') }}"
                                            alt=""></span>&nbsp;Struktur Organisasi
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
    </div><br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
=======
    </section>
    <section
        class="u-align-center u-clearfix u-grey-5 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-2"
        id="sec-035d"><br>
        <div class="u-list u-list-1">
            @foreach ($struktur as $asu)
                <img src="{{ asset($asu->image) }}" width="75%" alt="">
            @endforeach
        </div>
    </section>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
