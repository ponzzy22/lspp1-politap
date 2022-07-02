<<<<<<< HEAD
@extends('layout.client')
@section('judul')
    Tentang | LSP POLITAP
@endsection
@section('home')
    active
@endsection
@section('isi')
    <!-- ***** Bagian Konten Dimulai ***** -->
    <!-- Banner  -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            @foreach ($carousel as $asu)
                <div class="item item-1">
                    <div style="background-image: url('{{ asset($asu->image) }}')" class="img-fill">
                        {{-- <div class="text-content">
                        <h6>we are ready to help you</h6>
                        <h4>Financial Analysis<br>&amp; Consulting</h4>
                        <p>This finance HTML template is 100% free of charge provided by TemplateMo for everyone. This
                            is a multiple-page version with different HTML pages. <a href="one-page.html">One-page
                                version</a> is available as of 2021 February.</p>
                        <a href="contact.html" class="filled-button">contact us</a>
                    </div> --}}
=======
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>LSP P1 - POLITAP | Lembaga Sertifikasi Profesi Pihak Ke Satu Politeknik Negeri Ketapang</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/lsp.png') }}" />
    <link rel="stylesheet" href="{{ asset('client/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('client/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('client/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('client/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/lsp.png",
            "sameAs": [
                "https://facebook.com/name",
                "https://twitter.com/name",
                "https://www.instagram.com/lsppolitap/"
            ]
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
    <header class="u-align-left u-clearfix u-header u-section-row-container" id="sec-edd4">
        <div class="u-section-rows">
            <div class="u-custom-color-2 u-section-row u-section-row-1" id="sec-46aa">
                <div class="u-align-left u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
                    <h1 class="u-align-center u-custom-font u-font-arial u-text u-text-1">LEMBAGA SERTIFIKASI PROFESI
                        PIHAK KESATU - POLITEKNIK NEGERI KETAPANG<br>
                    </h1>
                    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-social-icons u-spacing-10 u-social-icons-1"
                        data-animation-name="" data-animation-duration="0" data-animation-direction="">
                        <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span
                                class="u-file-icon u-icon u-social-facebook u-social-icon u-text-white u-icon-1"><img
                                    src="{{ asset('images/logo4/1.png') }}" alt=""></span>
                        </a>
                        <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span
                                class="u-file-icon u-icon u-social-icon u-social-twitter u-text-white u-icon-2"><img
                                    src="{{ asset('images/logo4/2.png') }}" alt=""></span>
                        </a>
                        <a class="u-social-url" title="instagram" target="_blank"
                            href="https://www.instagram.com/lsppolitap/"><span
                                class="u-file-icon u-icon u-social-icon u-social-instagram u-text-white u-icon-3"><img
                                    src="{{ asset('images/logo4/3.png') }}" alt=""></span>
                        </a>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                    </div>
                </div>
            @endforeach
            <!-- // Item -->
        </div>
    </div>

<<<<<<< HEAD
    <!-- Request -->
    <div class="request-form">
        <div class="container">
            @if (Auth::user())
            <div class="row">
                <div class="col-md-8">
                    <h4>Selamat Bergabung, {{ Auth::user()->name }}....</h4>
                    <span>Formulir pengisian biodata registrasi disertai bukti lengkap secara online. </span>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('profil.edit2') }}" class="border-button">Daftar Sertifikasi</a>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-8">
                    <h4>Ayo Tingkatkan Kualitas Skill
                        Anda Bersama Kami</h4>
                    <span>Sebelum mendaftar sertifikasi pastikan anda telah memiliki akun terlebih dahulu...</span>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('reg') }}" class="border-button">Buat Akun anda</a>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Tentang -->
    <div class="more-info">
        <div class="container">
            <div class="section-heading">
                <h2>Tentang LSP-POLITAP<em></em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <span>Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri Ketapang</span>
                                    <ul class="u-custom-font u-font-arial u-text u-text-2"
                                        data-animation-name="customAnimationIn" data-animation-duration="1000">
                                        <li> Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga
                                            sertifikasi profesi yang telah memperoleh sertifikat lisensi No.
                                            BNSP-LSP-1214-ID dari
                                            Badan Nasional Sertifikasi Profesi
                                            (BNSP). dan memiliki Nomor SK
                                            KEP. 0429/BNSP/IV/2018.</li><br>
                                        <li>Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema
                                            yang
                                            dimiliki LSP&nbsp; Politeknik Negeri Ketapang diselaraskan dengan Kerangka
                                            Kualifikasi
                                            Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja
                                            Nasional Indonesia (SKKNI).&nbsp; </li><br>
                                        <li>
                                            Memiliki
                                            6 skema, LSP&nbsp; Politeknik Negeri Ketapang siap melaksanakan uji
                                            kompetensi
                                            pada seluruh
                                            mahasiswa Politeknik Negeri Ketapang dari berbagai program
                                            studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang
                                            memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di
                                            pasar tenaga kerja
                                            baik
                                            nasional maupun Internasional.
                                        </li><br>
=======




            </div>
            <div class="u-section-row u-sticky u-sticky-5c67 u-white u-section-row-2" id="sec-37e8">
                <div class="u-clearfix u-sheet u-sheet-2">
                    <nav data-position="" class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1">
                        <div class="menu-collapse u-custom-font u-font-arial"
                            style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700;">
                            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-text-custom-color-1 u-file-icon-4"
                                href="#">
                                <img src="{{ asset('images/logo/4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="u-custom-menu u-nav-container">
                            <ul class="u-custom-font u-font-arial u-nav u-spacing-2 u-unstyled u-nav-1">
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        href="{{ route('/') }}" style="padding: 10px 4px;">Home</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        style="padding: 10px 4px;">Profil</a>
                                    <div class="u-nav-popup">
                                        <ul
                                            class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('tentang') }}">Tentang LSP-POLITAP</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('visi') }}">Visi Misi &amp; Motto</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('struktur') }}">Struktur Organisasi</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('pengelola') }}">Pengelola LSP-POLITAP</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        style="padding: 10px 4px;">Layanan</a>
                                    <div class="u-nav-popup">
                                        <ul
                                            class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_skema') }}">Skema</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_tuk') }}">Tempat
                                                    Uji Kompetensi</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_asesor') }}">Asesor</a>
                                            </li>
                                            {{-- <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_sertifikat') }}">Daftar Pemegang
                                                    Sertifikat</a>
                                            </li> --}}
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('tutorial') }}">Prosedur Pendaftaran
                                                    Sertifikasi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        href="{{ route('client_berita') }}" style="padding: 10px 4px;">Berita</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        href="{{ route('client_galeri') }}" style="padding: 10px 4px;">Galeri</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        style="padding: 10px 4px;">Dokumen</a>
                                    <div class="u-nav-popup">
                                        <ul
                                            class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('download') }}">Lisensi Lembaga</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_skkni') }}">SKKNI</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('clien_fileapl2') }}">FR-APL-02</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('client_filelain') }}">Dokumen Lain</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-90 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white"
                                        style="padding: 10px 4px;">Login</a>
                                    <div class="u-nav-popup">
                                        <ul
                                            class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    class="u-active-white u-button-style u-grey-90 u-hover-custom-color-1 u-nav-link"
                                                    href="{{ route('reg') }}">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="u-custom-menu u-nav-container-collapse">
                            <div
                                class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                                <div class="u-inner-container-layout u-sidenav-overflow">
                                    <div class="u-menu-close"></div>
                                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ route('/') }}">Home</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Profil</a>
                                            <div class="u-nav-popup">
                                                <ul
                                                    class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('tentang') }}">Tentang LSP-POLITAP</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('visi') }}">Visi Misi &amp; Motto</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('struktur') }}">Struktur Organisasi</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('pengelola') }}">Pengelola
                                                            LSP-POLITAP</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Layanan</a>
                                            <div class="u-nav-popup">
                                                <ul
                                                    class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-7">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('client_skema') }}">Skema</a>
                                                    </li>
                                                    <li class="u-nav-item"><a href="{{ route('client_tuk') }}"
                                                            class="u-button-style u-nav-link">Tempat
                                                            Uji Kompetensi</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('client_asesor') }}">Asesor</a>
                                                    </li>
                                                    {{-- <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('client_sertifikat') }}">Daftar Pemegang
                                                            Sertifikat</a>
                                                    </li> --}}
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('tutorial') }}">Prosedur Pendaftaran
                                                            Sertifikasi</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ route('client_berita') }}">Berita</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ route('client_galeri') }}">Galeri</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Dokumen</a>
                                            <div class="u-nav-popup">
                                                <ul
                                                    class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('download') }}">Lisensi Lembaga</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('client_skkni') }}">SKKNI</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('clien_fileapl2') }}">FR-APL-02</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('client_filelain') }}">Dokumen Lain</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Login</a>
                                            <div class="u-nav-popup">
                                                <ul
                                                    class="u-border-1 u-border-grey-75 u-custom-font u-font-ubuntu u-h-spacing-24 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('login') }}">Login</a>
                                                    </li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                            href="{{ route('reg') }}">Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                                    </ul>
                                    <a href="{{ route('tentang') }}" class="filled-button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>
=======
                    </nav>
                    <a href="{{ route('/') }}" class="u-image u-logo u-image-1" data-image-width="362"
                        data-image-height="220">
                        <img src="{{ asset('assets/images/logo/lsp.png') }}" class="u-logo-image u-logo-image-1">
                    </a>
                    <a href="https://politap.ac.id/" class="u-image u-logo u-image-2" data-image-width="919"
                        data-image-height="936" title="POLITAP" target="_blank">
                        <img src="{{ asset('assets/images/logo/politap.png') }}"
                            class="u-logo-image u-logo-image-2">
                    </a>
                    <a href="https://www.kemdikbud.go.id/" class="u-image u-logo u-image-3" data-image-width="1580"
                        data-image-height="1600" title="Kemendikbud" target="_blank">
                        <img src="{{ asset('assets/images/logo/kemendikbud.png') }}"
                            class="u-logo-image u-logo-image-3">
                    </a>
                    <a href="https://bnsp.go.id/" class="u-image u-logo u-image-4" data-image-width="300"
                        data-image-height="116" title="BNSP" target="_blank">
                        <img src="{{ asset('assets/images/logo/bnsp.png') }}" class="u-logo-image u-logo-image-4">
                    </a>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Berita -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Berita Terkini<em></em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                @foreach ($artikel as $asu)
                    <div class="col-md-4">
                        <div class="service-item">
                            <img src="{{ asset($asu->image) }}" alt="">
                            <div class="down-content">
                                <h4> {{ $asu->title }}</h4>
                                <p> {{ $asu->excerpt }} </p>
                                <a href="{{ route('berita_detail', Crypt::encryptString($asu->id)) }}"
                                    class="filled-button">selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Layanan -->
    <div style="background-image: url('{{ asset('general/assets/images/back1.jpg') }}')" class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <h2>Layanan yang tersedia <br><em></em></h2>
                        {{-- <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum.
                            Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.
                            <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit
                            molestie nunc, ut posuere ante tortor ut neque.
                        </p> --}}
                        <a href="#" class="filled-button">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{ $dataskema }}</div>
                                <div class="count-title">Skema</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{ $datatuk }}</div>
                                <div class="count-title">TUK</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{ $dataasesor }}</div>
                                <div class="count-title">Asesor</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{ $dataasesi }}</div>
                                <div class="count-title">Asesi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengelola -->
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Pengelola LSP-POLITAP<em> </em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                @foreach ($karyawan as $asu)
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ $asu->image }}" alt="Avatar" style="width:260px;height:330px;">
                            </div>
                            <div class="flip-card-back">
                                <br><br><br><br>
                                <img src="{{ $asu->image }}" width="70px" alt="">
                                <p class="text-white">{{ $asu->nama }}</p>
                                <p class="text-white">{{ $asu->keterangan }}</p>
                            </div>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div class="callback-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Request a <em>call back</em></h2>
                        <span>Etiam suscipit ante a odio consequat</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
=======
    {{-- <---------------------- CAROUSEL ----------------------> --}}
    <section id="carousel_c215" class="u-carousel u-slide u-block-a13b-1" data-u-ride="carousel"
        data-interval="5000">
        <ol class="u-absolute-hcenter u-carousel-indicators u-block-a13b-2">
            <li data-u-target="#carousel_c215" data-u-slide-to="0" class="u-active u-grey-30"></li>
            <li data-u-target="#carousel_c215" class="u-grey-30" data-u-slide-to="1"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
            <div style="background-image: url('{{ asset('assets/images/carousel/2.jpg') }}')"
                class="skrollable skrollable-between u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1"
                src="" data-image-width="1600" data-image-height="678">
                <div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
                    <p style="font-size: 20px"
                        class="u-hidden-sm u-hidden-xs  u-hover-feature u-large-text u-text u-text-body-alt-color u-text-variant u-text-1">
                        Selamat Datang Di Website Kami, Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri
                        Ketapang.
                    </p>
                </div>
            </div>
            @foreach ($carousel as $asu)
                <div style="background-image: url('{{ asset($asu->image) }}')"
                    class="skrollable skrollable-between u-align-center u-carousel-item u-clearfix u-image u-section-1-2"
                    src="" data-image-width="1600" data-image-height="678">
                    <div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
                        <p class="u-large-text u-text u-text-variant u-text-white u-text-1">
                            {{ $asu->keterangan }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="u-carousel-control u-carousel-control-prev u-hidden-sm u-hidden-xs u-text-body-alt-color u-block-a13b-3"
            href="#carousel_c215" role="button" data-u-slide="prev">
            <span aria-hidden="true">
                <svg viewBox="0 0 477.175 477.175">
                    <path
                        d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="u-carousel-control u-carousel-control-next u-hidden-sm u-hidden-xs u-text-body-alt-color u-block-a13b-4"
            href="#carousel_c215" role="button" data-u-slide="next">
            <span aria-hidden="true">
                <svg viewBox="0 0 477.175 477.175">
                    <path
                        d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    {{-- <---------------------- PROFIL LSP ----------------------> --}}
    <section class="u-align-center u-clearfix u-valign-middle-xl u-section-2"
        id="carousel_de65">
        <h1 class="u-align-center u-custom-font u-font-roboto u-text u-text-1"><span
                class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo/88945.png') }}"
                    alt=""></span>&nbsp;PROFIL
            SINGKAT LSP-POLITAP
        </h1>
        <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <div class="u-tab-links-align-justify u-tabs u-tabs-1">
            <ul class="u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a class="active u-active-black u-button-style u-custom-color-2 u-hover-black u-radius-11 u-tab-link u-text-active-white u-tab-link-1"
                        id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5"
                        aria-selected="true">PROFIL LSP-POLITAP</a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-black u-button-style u-custom-color-2 u-hover-black u-radius-11 u-tab-link u-text-active-white u-tab-link-2"
                        id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7"
                        aria-selected="false">VISI, MISI, &amp; MOTTO</a>
                </li>
            </ul>
            <div class="u-tab-content">
                <div class="u-align-justify u-container-style u-grey-5 u-tab-active u-tab-pane u-tab-pane-1"
                    id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                    <div class="u-container-layout u-container-layout-1">
                        <img class="u-image u-image-default u-image-1"
                            src="{{ asset('images/back/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg') }}"
                            alt="" data-image-width="640" data-image-height="440"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                        <ul class="u-custom-font u-font-arial u-text u-text-2" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <li> Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga
                                sertifikasi profesi yang telah memperoleh sertifikat lisensi No. BNSP-LSP-1214-ID dari
                                Badan Nasional Sertifikasi Profesi
                                (BNSP). dan memiliki Nomor SK
                                KEP. 0429/BNSP/IV/2018.</li>
                            <li>Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang
                                dimiliki LSP&nbsp; Politeknik Negeri Ketapang diselaraskan dengan Kerangka Kualifikasi
                                Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja
                                Nasional Indonesia (SKKNI).&nbsp; Memiliki
                                6 skema, LSP&nbsp; Politeknik Negeri Ketapang siap melaksanakan uji
                                kompetensi
                                pada seluruh
                                mahasiswa Politeknik Negeri Ketapang dari berbagai program
                                studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang
                                memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di
                                pasar tenaga kerja
                                baik
                                nasional maupun Internasional.<br>
                            </li>
                        </ul>
                        <img class="u-image u-image-default u-preserve-proportions u-image-2"
                            src="{{ asset('assets/images/logo/lsp.png') }}" alt="" data-image-width="362"
                            data-image-height="220" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                    </div>
                </div>
                <div class="u-align-left u-container-style u-grey-5 u-tab-pane u-tab-pane-2" id="tab-14b7"
                    role="tabpanel" aria-labelledby="link-tab-14b7">
                    <div class="u-container-layout u-container-layout-2">
                        <p class="u-text u-text-3">
                            <span style="font-size: 1.875rem;">Visi </span>
                            <br>"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya
                            manusia agar mampu bersaing di era globalisasi."
                        </p>
                        <p class="u-text u-text-4">
                            <span style="font-size: 30px;">Misi</span>
                            <br> 1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten.<br>2. Mengembangkan
                            sumber daya manusia di LSP Politeknik Negeri &nbsp;&nbsp; Ketapang dan seluruh asesor
                            kompetensi menjadi tenaga profesional.<br>3. Mengembangkan skema dan perangkat asesmen
                            secara berkelanjutan.<br>4. Mengembangkan sarana dan prasarana uji kompetensi .<br>5.
                            Mengembangkan sistem informasi website untuk kepentingan internal &nbsp;&nbsp; dan eksternal
                            LSP POLITAP .<br>6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder .
                        </p>
                        <p class="u-text u-text-5">
                            <span style="font-size: 30px;">Motto</span>
                            <br>"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya
                            manusia agar mampu bersaing di era globalisasi."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <---------------------- BANNER LSP ----------------------> --}}
    <section class="u-clearfix u-custom-color-3 u-section-3" id="carousel_47cb">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-26-lg u-size-28-xl u-size-29-md u-size-29-sm u-size-29-xs u-layout-cell-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-1">
                                <h1 class="u-custom-font u-font-lato u-text u-text-1"> Ayo Tingkatkan Kualitas Skill
                                    Anda Bersama Kami <br>
                                </h1>
                                <a href="{{ route('reg') }}"
                                    class="u-active-white u-align-center u-border-none u-btn u-button-style u-custom-color-2 u-hover-white u-btn-1"><span
                                        class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512"
                                            x="0px" y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="m19.98,200.65909l180.67121,0l55.82879,-171.63684l55.82883,171.63684l180.67118,0l-146.16581,106.07619l55.83168,171.63684l-146.16587,-106.07908l-146.16584,106.07908l55.8317,-171.63684l-146.16586,-106.07619z">
                                            </path>
                                        </svg><img></span>&nbsp;DAFTAR SERTIFIKASI
                                </a>
                            </div>
                        </div>
                        <div style="background-image: url('{{ asset('images/back/2.jpg') }}')"
                            class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-31-md u-size-31-sm u-size-31-xs u-size-32-xl u-size-34-lg u-image-1"
                            data-image-width="1280" data-image-height="720" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <---------------------- BERITA LSP ----------------------> --}}
    <section class="u-align-center u-clearfix u-grey-15 u-section-4" id="carousel_aa74">
        <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
            <h1 class="u-align-center u-custom-font u-font-roboto u-text u-text-1" data-animation-name=""
                data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><span
                    class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo/3627699.png') }}"
                        alt=""></span>&nbsp;
                BERITA SEPUTAR LSP - POLITAP<br>
            </h1>
            <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            <div class="u-expanded-width u-layout-grid u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($artikel as $asu)
                        <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div
                                class="u-container-layout u-similar-container u-valign-bottom-sm u-valign-bottom-xl u-container-layout-1">
                                <img alt=""
                                    class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-hover-feature u-image u-image-default u-image-1"
                                    data-image-width="920" data-image-height="920" src="{{ asset($asu->image) }}">
                                <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-2"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    {{ $asu->title }}
                                </h3>
                                <p class="u-text u-text-3" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                    {!! $asu->excerpt !!}
                                </p>
                                <p class="u-custom-font u-font-arial u-text u-text-4">{{ $asu->created_at }}</p>
                                <a href="{{ route('berita_detail', $asu->id) }}"
                                    class="u-border-2 u-btn u-button-style u-custom-color-2 u-text-hover-palette-1-base u-btn-1"
                                    data-animation-name="flipIn" data-animation-duration="1000"
                                    data-animation-direction="X">LIHAT DETAIL&nbsp; &nbsp;<span
                                        class="u-file-icon u-icon u-text-white u-icon-2"><img
                                            src="{{ asset('images/logo2/10.png') }}" alt=""></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <---------------------- PENGELOLA LSP ----------------------> --}}
    <section class="u-align-center u-clearfix u-valign-bottom-sm u-section-5" id="carousel_02fc">
        <div class="u-container-style u-expanded-width u-grey-15 u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-roboto u-text u-text-1" data-animation-name=""
                    data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><span
                        class="u-file-icon u-icon u-text-black u-icon-1"><img
                            src="{{ asset('images/logo/3627699.png') }}"
                            alt=""></span>&nbsp;&nbsp;PENGELOLA LSP - POLITAP
                </h2>
                <div class="u-border-3 u-border-grey-90 u-line u-line-horizontal u-line-1"></div>
                <div class="u-layout-grid u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        @foreach ($karyawan as $asu)
                            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1000">
                                <div class="u-container-layout u-similar-container u-container-layout-2">
                                    <img alt=""
                                        class="u-border-2 u-expanded-width u-hover-feature u-image u-image-default u-image-1"
                                        data-image-width="404" data-image-height="404" src="{{ $asu->image }}">
                                    <p class="u-align-center u-text u-text-custom-color-2 u-text-2">
                                        {{ $asu->keterangan }}</p>
                                    <h3 class="u-align-center u-text u-text-3">{{ $asu->nama }}</h3>
                                </div>
                            </div>
                        @endforeach
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<<<<<<< HEAD
    <!-- Lembaga Tertaut -->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Lembaga Tertaut<em> </em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
=======
    {{-- <---------------------- LEMBAGA YANG TERTAUT ----------------------> --}}
    <section class="u-align-center u-clearfix u-hidden-sm u-hidden-xs u-white u-section-6" id="sec-eb3e">
        <h1 class="u-align-center u-custom-font u-font-roboto u-text u-text-1" data-animation-name=""
            data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><span
                class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo/58061.png') }}"
                    alt=""></span>&nbsp;&nbsp;LEMBAGA YANG TERTAUT<br>
        </h1>
        <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-1">
                        <span class="u-file-icon u-icon u-icon-2" data-href="https://bnsp.go.id/"
                            data-target="_blank" data-animation-name="customAnimationIn"
                            data-animation-duration="1000" data-animation-direction=""><img
                                src="{{ asset('images/logo/bnsp.png') }}" alt=""></span>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-2">
                        <span class="u-file-icon u-icon u-icon-3" data-href="https://www.kemdikbud.go.id/"
                            data-target="_blank" data-animation-name="customAnimationIn"
                            data-animation-duration="1000" data-animation-direction=""><img
                                src="{{ asset('images/logo/kemendikbud.png') }}" alt=""></span>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-3">
                        <span class="u-file-icon u-icon u-icon-4" data-href="https://politap.ac.id/"
                            data-target="_blank" data-animation-name="customAnimationIn"
                            data-animation-duration="1000" data-animation-direction=""><img
                                src="{{ asset('images/logo/politap.png') }}" alt=""></span>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-4">
                        <span class="u-file-icon u-icon u-icon-5" data-href="#"
                            data-animation-name="customAnimationIn" data-animation-duration="1000"
                            data-animation-direction=""><img src="{{ asset('images/logo/lsp.png') }}"
                                alt=""></span>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                    </div>
                    <table class="table">
                        <tr>
                            <td align="center" style="width: 200px"><a href="https://bnsp.go.id/" target="_blank"
                                    rel="noopener noreferrer"><img
                                        src="{{ asset('general/assets/images/bnsp.png') }}" height="100px"></a>
                            </td>
                            <td align="center" style="width: 200px"><a href="https://www.kemdikbud.go.id/"
                                    target="_blank" rel="noopener noreferrer"><img
                                        src="{{ asset('general/assets/images/kemendikbud_small.png') }}"
                                        height="100px"></a></td>
                            <td align="center" style="width: 200px"><a href="https://politap.ac.id/" target="_blank"
                                    rel="noopener noreferrer"><img
                                        src="{{ asset('general/assets/images/politap_small.png') }}"
                                        height="100px"></a>
                            </td>
                            <td align="center" style="width: 200px"><a href="{{ route('/') }}"><img
                                        src="{{ asset('general/assets/images/lsp_small.jpg') }}"
                                        height="100px"></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
    </div>
    <!-- ***** Bagian Akhir Konten ***** -->
@endsection
=======
    </section>

    {{-- <---------------------- PETA DAN KONTAK ----------------------> --}}

    <footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-df38">
        <div class="u-align-center u-container-style u-custom-color-1 u-expanded-width u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-absolute-hcenter u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
                <p class="u-hidden-md u-hidden-sm u-hidden-xs u-custom-font u-font-roboto u-text u-text-1"><span class="u-file-icon u-icon"><img
                            src="{{ asset('images/logo4/14.png') }}" alt=""></span>&nbsp;Kontak Admin&nbsp;
                </p>
                <h1 class="u-custom-font u-font-roboto u-text u-text-2"><span
                        class="u-file-icon u-icon u-text-white u-icon-2"><img
                            src="{{ asset('images/logo4/15.png') }}" alt=""></span>&nbsp;&nbsp;PETA
                    LOKASI&nbsp;
                </h1>
                <h1 class="u-hidden-md u-hidden-sm u-hidden-xs u-custom-font u-font-roboto u-text u-text-3"><span
                        class="u-file-icon u-icon u-text-white u-icon-3"><img
                            src="{{ asset('images/logo4/54.png') }}" alt=""></span>&nbsp;ALAMAT LSP -
                    POLITAP
                </h1>
                <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                    <div class="u-gutter-0 u-layout">
                        <div class="u-layout-row">
                            <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <div class="u-expanded u-grey-10 u-map u-map-1">
                                        <div class="embed-responsive">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.250339779255!2d109.988631!3d-1.8168375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1650546915934!5m2!1sid!2sid"
                                                data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE0ITFtOCExbTMhMWQxNTk1MS4yNTAzMzk3NzkyNTUhMmQxMDkuOTg4NjMxITNkLTEuODE2ODM3NSEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgwJTI1M0EweGUwNWVlNjVlMzYyN2JhNmMhMnNQb2xpdGVrbmlrJTI1MjBOZWdlcmklMjUyMEtldGFwYW5nITVlMCEzbTIhMXNpZCEyc2lkITR2MTY1MDU0NjkxNTkzNCE1bTIhMXNpZCEyc2lkJTIyJTJDJTIyem9vbSUyMiUzQW51bGwlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEITFtMTQhMW04ITFtMyExZDE1OTUxLjI1MDMzOTc3OTI1NSEyZDEwOS45ODg2MzEhM2QtMS44MTY4Mzc1ITNtMiExaTEwMjQhMmk3NjghNGYxMy4xITNtMyExbTIhMXMweDAlMjUzQTB4ZTA1ZWU2NWUzNjI3YmE2YyEyc1BvbGl0ZWtuaWslMjUyME5lZ2VyaSUyNTIwS2V0YXBhbmchNWUwITNtMiExc2lkITJzaWQhNHYxNjUwNTQ2OTE1OTM0ITVtMiExc2lkITJzaWQlMjIlN0Q="></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-layout-cell u-size-25 u-layout-cell-2"
                                data-animation-direction="">
                                <div class="u-container-layout u-valign-top u-container-layout-3">
                                    <img class="u-image u-image-round u-radius-10 u-image-1"
                                        src="{{ asset('images/logo/IMG_20220420_131245.jpg') }}" alt=""
                                        data-image-width="4160" data-image-height="2352">
                                    <h2 class="u-custom-font u-font-merriweather u-text u-text-4"> Lembaga Sertifikasi
                                        Profesi Politap
                                        Negeri Ketapang </h2>
                                    <p class="u-custom-font u-font-merriweather u-text u-text-5">
                                        <span style="font-weight: 700;">Alamat </span>:<br>Gedung Kuliah POLITAP Lantai
                                        1 ,<br>Jalan Rangge
                                        Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan
                                        Barat 78112
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
                                    </p>
                                </div>
                            </div>
                            <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-3">
                                <div class="u-container-layout u-container-layout-4">
                                    <p class="u-text u-text-6"><span class="u-file-icon u-icon"><img
                                                src="{{ asset('images/logo4/124034.png') }}"
                                                alt=""></span>&nbsp;&nbsp;
                                        <i>08965386474683</i>
                                    </p>
                                    <p class="u-text u-text-7"><span class="u-file-icon u-icon"><img
                                                src="{{ asset('images/logo4/726623.png') }}" alt=""></span>
                                        &nbsp;<i>lsp@politap.ac.id</i>
                                    </p>
                                    <p class="u-hidden-md u-hidden-sm u-hidden-xs u-text u-text-8">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                                            href="https://www.instagram.com/lsppolitap/" target="_blank"><span
                                                class="u-file-icon u-icon"><img
                                                    src="{{ asset('images/logo4/1409946.png') }}"
                                                    alt=""></span>&nbsp;LSPPOLITAP
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="u-small-text u-text u-text-variant u-text-9"> Copyright
            © 2022
            ♦
            Designed &amp; Developed By <a href="https://politap.ac.id/"
                class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                target="_blank">Politeknik Negeri Ketapang</a>
        </p>
        <p class="u-small-text u-text u-text-variant u-text-10"> Hand-crafted
            &amp;<span style="font-weight: 700;"></span> made
            with <i></i>
            <a href="http://informatika.politap.ac.id/"
                class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3"
                target="_blank">Teknik Informatika</a>
            <a href="https://politap.ac.id/" target="_blank"
                class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4"></a>
            v.3.06.22
        </p>
    </footer>
</body>

</html>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
