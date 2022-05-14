<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LSP P1-POLITAP | BERANDA</title>
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/44.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/logo/lsp.png') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets3/css/aos.css') }}">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 400px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 300px;
            height: 300px;
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
            background-color: transparent;
            color: black;
        }

        .flip-card-back {
            background-color: #6a008a;
            color: white;
            transform: rotateY(180deg);
        }

    </style>
</head>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        {{-- <-------------------- NAVBAR --------------------> --}}
        <nav class="navbar horizontal-layout-navbar fixed-top navbar-expand-lg" data-aos="fade-down"
            data-aos-delay="100">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar" href="https://www.bnsp.go.id/"><img
                    src="{{ asset('public/assets/images/logo/bnsp.png') }}" width="70px" alt="logo" /></a>
                <a style="padding-left: 30%" class="navbar" href="https://www.kemdikbud.go.id/"><img
                        src="{{ asset('public/assets/images/logo/kemendikbud.png') }}" width="32px" alt="logo" /></a>
                <a class="navbar" href="https://politap.ac.id/"><img
                        src="{{ asset('public/assets/images/logo/politap.png') }}" width="31px" alt="logo" /></a>
                <a class="navbar" href="{{ url('/') }}"><img
                        src="{{ asset('public/assets/images/logo/lsp.png') }}" width="45px" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex flex-grow">
                <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
                    <li class="nav-item nav-profile" style="padding-left: 25%">
                        <a class="nav-link">
                            <div class="nav-profile-text">
                                @foreach ($beranda as $asu)
                                    <h4 class="text text-white"> {!! $asu->judul !!}</h4>
                                @endforeach
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button"
                    data-toggle="collapse" data-target="#horizontal-top-example">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </nav><br>

        <div class="container-fluid page-body-wrapper">
            {{-- <-------------------- SETTING TRIGGER --------------------> --}}
            {{-- <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-tasks"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">Tema Sidebar</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">Tema Navigasi</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div> --}}
            <div class="theme-setting-wrapper">
                <a href="#home">
                    <div id="settings-trigger" data-toggle="tooltip" data-placement="right" title=""
                        data-original-title=""><i class="fas fa-arrow-up"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ url('/') }}">
                    <div id="settings-trigger2" data-toggle="tooltip" data-placement="right" title="Homepage"
                        data-original-title="Basic tooltip"><i class="fas fa-home"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('profil.front') }}">
                    <div id="settings-trigger4" data-toggle="tooltip" data-placement="right" title="Profil, Visi, Misi, Struktur Organisasi & Data Pengelola"
                        data-original-title="Basic tooltip"><i class="fas fa-building"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('tampil.skema') }}">
                    <div id="settings-trigger5" data-toggle="tooltip" data-placement="right" title="Layanan LSP - POLITAP"
                        data-original-title="Basic tooltip"><i class="fab fa-pagelines"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('registrasi.index') }}">
                    <div id="settings-trigger6" data-toggle="tooltip" data-placement="right" title="Pendaftaran"
                        data-original-title="Basic tooltip"><i class="fas fa-plus"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('pengumuman.list') }}">
                    <div id="settings-trigger7" data-toggle="tooltip" data-placement="right" title="Berita/Pengumuman"
                        data-original-title="Basic tooltip"><i class="fas fa-bullhorn"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('berita.list') }}">
                    <div id="settings-trigger8" data-toggle="tooltip" data-placement="right" title="Informasi Pendaftaran"
                        data-original-title="Basic tooltip"><i class="fas fa-info"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('file.tampil') }}">
                    <div id="settings-trigger9" data-toggle="tooltip" data-placement="right" title="Download Dokumen"
                        data-original-title="Basic tooltip"><i class="fas fa-file-download"></i></div>
                </a>
            </div>
            <div class="theme-setting-wrapper">
                <a href="{{ route('uifoto.index') }}">
                    <div id="settings-trigger10" data-toggle="tooltip" data-placement="right" title="Galeri"
                        data-original-title="Basic tooltip"><i class="fas fa-images"></i></div>
                </a>
            </div>



            {{-- <-------------------- SIDEBAR KIRI --------------------> --}}
            <nav class="sidebar sidebar-offcanva fixed" data-aos="fade-right" data-aos-delay="200" id="home">
            </nav>


            {{-- <-------------------- MAIN WEBSITE --------------------> --}}
            <div class="main-panel">
                <br><br><br>
                {{-- <---------------------- CAROUSEL ----------------------> --}}
                <div style="padding-top: 30px" id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-aos="zoom-in"
                    data-aos-delay="100">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="">
                        </li>
                        {{-- <li data-target="#carouselExampleIndicators2" data-slide-to="1" class="">
                        </li> --}}
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2" class="active">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($carousel as $asu)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ $asu->image }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text text-white">{{ $asu->judul }}</h4>
                                    <h3>
                                        {{ $asu->keterangan }}
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="{{ asset('public/assets/images/carousel/lsp-team.jpg') }}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4 class="text text-white" data-aos="fade-up" data-aos-delay="200">
                                    Selamat Datang di Website Kami,
                                </h4>
                                <h3 data-aos="fade-up" data-aos-delay="300">
                                    Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang
                                </h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><br>


                {{-- <---------------------- KONTEN WRAPPER ----------------------> --}}
                <div class="content-wrapper">



                    @yield('isi')


                    {{-- <---------------------- FOOTER ----------------------> --}}
                </div>

            </div>
            {{-- <-----------X----------- MAIN WEBSITE ------------X----------> --}}
        </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text text-white text-center text-sm-left d-block d-sm-inline-block">Copyright
                © 2022
                &diamondsuit;
                Designed & Developed By <a href="https://politap.ac.id/" target="_blank">Politeknik
                    Negeri
                    Ketapang</a>.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-white text-center">Hand-crafted
                &amp; made
                with
                <i class="far fa-heart text-danger"></i><a href="https://politap.ac.id/" target="_blank">
                    Teknik
                    Informatika </a><code class="text text-danger"> v.1.4.22</code></span>
        </div>
    </footer>

    {{-- <---------------------- JS ----------------------> --}}
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('public/assets/js/misc.js') }}"></script>
    <script src="{{ asset('public/assets/js/settings.js') }}"></script>
    <script src="{{ asset('public/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('public/assets/js/tooltips.js') }}"></script>
    <script src="{{ asset('public/assets/js/popover.js') }}"></script>
    {{-- <-----------X----------- JS ------------X----------> --}}



    {{-- <----------------------CAROUSEL JS----------------------> --}}
    <script src="{{ asset('public/assets3/js/Jquery3.4.1.min.js') }}"></script>
    <script src="{{ asset('public/assets3/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets3/js/aos.js') }}"></script>
    <script src="{{ asset('public/assets3/js/main.js') }}"></script>
    {{-- <-----------X-----------CAROUSEL JS------------X----------> --}}
    <script src="{{ asset('public/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('public/assets/js/google-maps.js') }}"></script>
    {{-- <----------------------ARTIKEL JS----------------------> --}}
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> --}}
    <script src="{{ asset('public/assets/js/script.js') }}"></script>

</body>

</html>
