<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
=======
    <meta name="keywords" content="INTUITIVE">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>@yield('judul')</title>
<<<<<<< HEAD
    <link rel="shortcut icon" href="{{ asset('general/assets/images/shortcut.jpg') }}" />

    <!-- Bootstrap & CSS Utama -->
    <link href="{{ asset('general/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Tambahan CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('general/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('general/assets/css/lsp.css') }}">
    <link rel="stylesheet" href="{{ asset('general/assets/css/owl.css') }}">

    <!-- CSS Spesial -->
    @yield('css')
=======
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/lsp.png') }}" />
    <link rel="stylesheet" href="{{ asset('client/nicepage.css') }}" media="screen">
    @yield('css')
    <script class="u-script" type="text/javascript" src="{{ asset('client/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('client/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9

    <!-- Flip Card -->
    <style>
        .flip-card {
            background-color: transparent;
            width: 260px;
            height: 330px;
            perspective: 1000px;
        }
<<<<<<< HEAD

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: rgb(255, 255, 255);
            color: rgb(255, 255, 255);
        }

        .flip-card-back {
            background-color: #9b0000e2;
            color: white;
            transform: rotateY(180deg);
        }
    </style>

    <!-- Dropdown menu -->
    <style>
        .dropbtn {}

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #9b0000e2;
            min-width: 300px;
            box-shadow: 0px 8px 16px 0px rgba(41, 32, 32, 0.46);
            z-index: 1;
        }

        .dropdown-content a {
            color: rgb(255, 255, 255);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: rgb(0, 0, 0);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #05040400;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-university"></i>Lembaga Sertifikasi Profesi
                                Politeknik Negeri Ketapang</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="https://www.instagram.com/lsppolitap/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    </ul>
=======
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
                    </div>
                </div>
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
                                    </ul>
                                </div>
                            </div>
                            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                        </div>
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

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="padding-left: 1%">
                        <li class="nav-item">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/bnsp.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/kemendikbud_small.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/politap_small.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/lsp_small.jpg') }}"
                                height="40px">
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown @yield('home') nav-item">
                            <a class="nav-link dropbtn" href="{{ route('/') }}">HOME</a>
                        </li>
                        <li class="nav-item @yield('profil') dropdown">
                            <a class="nav-link dropbtn">PROFIL <i class="fa  fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="{{ route('tentang') }}">Tentang LSP-POLITAP</a>
                                <a href="{{ route('struktur') }}">Struktur Organisasi</a>
                                <a href="{{ route('pengelola') }}">Pengelola LSP-POLITAP</a>
                            </div>
                        </li>
                        <li class="nav-item @yield('layanan') dropdown">
                            <a class="nav-link dropbtn">LAYANAN <i class="fa  fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="{{ route('client_skema') }}">Skema</a>
                                <a href="{{ route('client_tuk') }}">Tempat
                                    Uji Kompetensi</a>
                                <a href="{{ route('client_asesor') }}">Asesor</a>
                                <a href="{{ route('tutorial') }}">Prosedur Pendaftaran
                                    Sertifikasi</a>
                            </div>
                        </li>
                        <li class="nav-item @yield('berita')">
                            <a class="nav-link" href="{{ route('client_berita') }}">BERITA</a>
                        </li>
                        <li class="nav-item @yield('galeri')">
                            <a class="nav-link" href="{{ route('client_galeri') }}">GALERI</a>
                        </li>
                        <li class="nav-item @yield('download')">
                            <a class="nav-link" href="{{ route('download') }}">DOKUMEN</a>
                        </li>
                        @if (Auth::user())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropbtn" style="color: #40124fda"><i class="fa fa-user"></i> Akun
                                    Anda</a>
                                <div class="dropdown-content">
                                    <a href="{{ route('profil.edit2') }}">Daftar Sertifikasi</a>
                                    <a href="{{ route('dashasesi.index') }}">Dashboard Asesi</a>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="{{ route('login') }}"><i
                                        class="fa fa-user"></i>
                                    LOGIN</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ***** Bagian Konten Dimulai ***** -->
    @yield('isi')
    <!-- ***** Bagian Akhir Konten Dimulai ***** -->

<<<<<<< HEAD
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-mobile-phone"></i> Kontak Admin</h4>
                    <ul class="menu-list">
                        <li><i class="fa fa-whatsapp"></i> Whatsapp : 08965386474683</li>
                        <li><i class="fa fa-envelope"></i> Email : lsp@politap.ac.id</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.instagram.com/lsppolitap/" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-university"></i> Lembaga Tertaut</h4>
                    <ul class="menu-list">
                        <li><a href="https://politap.ac.id/">Politeknik Negeri Ketapang</a></li>
                        <li><a href="http://informatika.politap.ac.id/">Teknologi Informatika POLITAP</a></li>
                        <li><a href="https://www.kemdikbud.go.id/">Kementerian
                                Pendidikan, Kebudayaan,
                                Riset, dan Teknologi</a></li>
                        <li><a href="/">Lembaga Sertifikasi Profesi POLITAP</a></li>
                        <li><a href="https://bnsp.go.id/">Badan Nasional Sertifikasi Profesi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-map-marker"></i> Alamat</h4>
                    <p>Gedung Kuliah POLITAP Lantai
                        1 ,<br>Jalan Rangge
                        Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan
                        Barat 78112.</p>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <div class="contact-form">
                        <form id="contact footer-contact" action="" method="post">
                            <iframe height="220px" class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.250339779255!2d109.988631!3d-1.8168375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1650546915934!5m2!1sid!2sid"
                                data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE0ITFtOCExbTMhMWQxNTk1MS4yNTAzMzk3NzkyNTUhMmQxMDkuOTg4NjMxITNkLTEuODE2ODM3NSEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgwJTI1M0EweGUwNWVlNjVlMzYyN2JhNmMhMnNQb2xpdGVrbmlrJTI1MjBOZWdlcmklMjUyMEtldGFwYW5nITVlMCEzbTIhMXNpZCEyc2lkITR2MTY1MDU0NjkxNTkzNCE1bTIhMXNpZCEyc2lkJTIyJTJDJTIyem9vbSUyMiUzQW51bGwlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEITFtMTQhMW04ITFtMyExZDE1OTUxLjI1MDMzOTc3OTI1NSEyZDEwOS45ODg2MzEhM2QtMS44MTY4Mzc1ITNtMiExaTEwMjQhMmk3NjghNGYxMy4xITNtMyExbTIhMXMweDAlMjUzQTB4ZTA1ZWU2NWUzNjI3YmE2YyEyc1BvbGl0ZWtuaWslMjUyME5lZ2VyaSUyNTIwS2V0YXBhbmchNWUwITNtMiExc2lkITJzaWQhNHYxNjUwNTQ2OTE1OTM0ITVtMiExc2lkITJzaWQlMjIlN0Q="></iframe>
                        </form>
=======
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
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
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

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2022 Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</a><br>
                        Designed & Developed By : <a href="http://informatika.politap.ac.id/">Teknologi Informatika</a>
                        <a href="https://politap.ac.id/">Politeknik Negeri Ketapang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap & Jquery Script -->
    <script src="{{ asset('general/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('general/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Scrip tambahan -->
    <script src="{{ asset('general/assets/js/custom.js') }}"></script>
    <script src="{{ asset('general/assets/js/owl.js') }}"></script>
    <script src="{{ asset('general/assets/js/slick.js') }}"></script>
    <script src="{{ asset('general/assets/js/accordions.js') }}"></script>

    <!-- Scrip tambahan -->
    @yield('javascript')


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
</body>

</html>
