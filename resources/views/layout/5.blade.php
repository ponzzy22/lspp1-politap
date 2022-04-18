<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LSP P1-POLITAP | ADMINISTRASI</title>
    <!-- /////////////////////////////////// -->
    <!-- ASSETS -->
    <!-- /////////////////////////////////// -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/logo/lsp.png') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/modules/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/modules/components.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets2/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets2/modules/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets2/modules/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets2/modules/jquery-selectric/selectric.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
</head>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <!-- /////////////////////////////////// -->
        <!-- LOGO NAVIGASI -->
        <!-- /////////////////////////////////// -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('backend') }}"><img
                        src="{{ asset('public/assets/images/logo/lsp1.png') }}" alt="logo" /></a>
                <!-- /////////////////////////////////// -->
                <!-- LOGO MINI -->
                <!-- /////////////////////////////////// -->
                <a class="navbar-brand brand-logo-mini" href="#"><img
                        src="{{ asset('public/assets/images/logo/mini3.png') }}" alt="logo" /></a>
            </div>
            <!-- /////////////////////////////////// -->
            <!-- MENU NAVIGASI -->
            <!-- /////////////////////////////////// -->
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler  align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span></button>
                <!-- /////////////////////////////////// -->
                <!-- JUDUL BARIS -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#map" data-toggle="dropdown">
                            <i class="fas fa-map-marker mx-0"></i>
                        </a> -->
                    </li>
                    <li>
                        <div class="card-subtitle2">
                            <h5>LEMBAGA SERTIFIKASI PROFESI PIHAK KESATU POLITAP <i class="fas fa-ellipsis-h"></i>
                                ADMINISTRASI WEBSITE</h5>
                        </div>
                    </li>
                </ul>
                <!-- /////////////////////////////////// -->
                <!-- ICON SOSIAL MEDIA -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link count-indicator" id="notificationDropdown" target="_blank"
                            href="{{ url('/') }}">
                            <i class="fas fa-desktop mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link count-indicator" id="notificationDropdown" target="_blank"
                            href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=lspp1-politap">
                            <i class="fas fa-database mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"
                            aria-expanded="false">
                            <img src="{{ asset(Auth::user()->image) }}" alt="profile">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item">
                                <i class="fas fa-cog text-primary"></i>
                                Settings
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                    class="fas fa-power-off text-primary"></i>
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    {{-- <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                    </li> --}}
                    <!-- /////////////////////////////////// -->
                    <!-- PENCARIAN -->
                    <!-- /////////////////////////////////// -->
                    {{-- <li>
                        <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Pencarian" aria-label="Search">
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- /////////////////////////////////// -->
            <!-- TEMA WEBSITE -->
            <!-- /////////////////////////////////// -->
            <div class="theme-setting-wrapper">
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
            </div>
            <!-- /////////////////////////////////// -->
            <!-- SIDEBAR -->
            <!-- /////////////////////////////////// -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- NAMA PENGGUNA -->
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image">
                                <a href="#"> <img src="{{ asset(Auth::user()->image) }}" alt="image" /></a>
                            </div>
                            <div class="profile-name">
                                <p class="name">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="designation text-center">
                                    Administrator
                                </p>
                            </div>
                        </div>
                    </li>
                    <!-- /////////////////////////////////// -->
                    <!-- MENU SIDEBAR -->
                    <!-- /////////////////////////////////// -->
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('admin') }}>
                            <i class="fa fa-dot-circle  menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                            aria-controls="sidebar-layouts">
                            <i class="fab fa-pagelines menu-icon"></i>
                            <span class="menu-title">Layanan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sidebar-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('skema.index') }}">Skema/Kluster</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('prodi.index') }}">Program Studi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('asesor.index') }}">Asesor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('tuk.index') }}">TUK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('unikom.index') }}">Unit Kompetensi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('asesmen.index') }}">Formulir
                                        APL-02</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts2" aria-expanded="false"
                            aria-controls="sidebar-layouts">
                            <i class="fas fa-id-card  menu-icon"></i>
                            <span class="menu-title">Data Sertifikasi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sidebar-layouts2">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('registrasi.baru') }}">Regsitrasi
                                        Baru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list.valid') }}">Proses Sertifikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('list.tolak') }}">Registrasi Ditolak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('list.sertifikat') }}">Pemegang
                                        Sertifikat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <i class="fa fa-users menu-icon"></i>
                            <span class="menu-title">Pengguna</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                class="fas fa-power-off menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /////////////////////////////////// -->
            <!-- MAIN WEBSITE -->
            <!-- /////////////////////////////////// -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ISI WEBSITE -->
                    @yield('isi')
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <!-- SIDEBAR KANAN -->
        <!-- /////////////////////////////////// -->
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close fa fa-times"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                        aria-controls="todo-section" aria-expanded="true">SETTING ANTARMUKA</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                        aria-controls="chats-section">CHATS</a>
                </li> --}}
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper ps" id="todo-section" role="tabpanel"
                    aria-labelledby="todo-section">
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('galeri.index') }}" class="text text-white"><i
                                            class="fas fa-th-large"></i> Galeri</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('berita.index') }}" class="text text-white"><i
                                            class="fas fa-info-circle"></i> Berita</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('strorg.index') }}" class="text text-white"><i
                                            class="fas fa-sitemap"></i> Struktur
                                        Organisasi</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('f_profil.index') }}" class="text text-white"><i
                                            class="fas fa-building"></i> Profil LSP</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('beranda_img2.index') }}" class="text text-white"><i
                                            class="fas fa-users"></i> Portofolio Karyawan</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('beranda_img1.index') }}" class="text text-white"><i
                                            class="fas fa-image"></i> Carousel</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn btn-primary btn-block">
                                    <a href="{{ route('sett-beranda.index') }}" class="text text-white"><i
                                            class="fas fa-window-maximize"></i> Judul Web</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- To do section tab ends -->
                {{-- <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    @foreach ($jadwal as $asu)
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="fa fa-times-circle text-primary mr-2"></i>
                            <span>{{ $asu->date }}</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                    @endforeach                    
                </div> --}}
                <!-- chat tab ends -->
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <!--  -->
    <!-- /////////////////////////////////// -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text text-white text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022
                &diamondsuit;
                Designed & Developed By <a href="https://politap.ac.id/" target="_blank">Politeknik Negeri
                    Ketapang</a>.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-white text-center">Hand-crafted &amp; made
                with
                <i class="far fa-heart text-danger"></i><a href="https://politap.ac.id/" target="_blank"> Teknik
                    Informatika </a><code class="text text-danger"> v.1.4.22</code></span>
        </div>
    </footer>

    <section id="JAVASCRIPT">
        <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('public/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
        <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('public/assets/js/misc.js') }}"></script>
        <script src="{{ asset('public/assets/js/settings.js') }}"></script>
        <script src="{{ asset('public/assets/js/todolist.js') }}"></script>
        <script src="{{ asset('public/assets/js/google-maps.js') }}"></script>
        <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('public/assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('public/assets/js/formpickers.js') }}"></script>
        <script src="{{ asset('public/assets/js/form-addons.js') }}"></script>
        <script src="{{ asset('public/assets/js/x-editable.js') }}"></script>
        <script src="{{ asset('public/assets/js/dropify.js') }}"></script>
        <script src="{{ asset('public/assets/js/dropzone.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery-file-upload.js') }}"></script>
        <script src="{{ asset('public/assets/js/formpickers.js') }}"></script>
        <script src="{{ asset('public/assets/js/form-repeater.js') }}"></script>
        <script src="{{ asset('public/assets/js/alerts.js') }}"></script>
        <script src="{{ asset('public/assets/js/avgrund.js') }}"></script>
        <script src="{{ asset('public/assets/vendors/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('public/assets/vendors/tinymce/themes/modern/theme.js') }}"></script>
        <script src="{{ asset('public/assets/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/data-table.js') }}"></script>
        <script src="{{ asset('public/assets/js/wizard.js') }}"></script>
        <script src="{{ asset('public/assets/modules/dropzone.min.js') }}"></script>
        <script src="{{ asset('public/assets/modules/components-multiple-upload.js') }}"></script>
        <script src="{{ asset('public/assets2/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('public/assets2/js/stisla.js') }}"></script>
        <script src="{{ asset('public/assets2/modules/summernote/summernote-bs4.js') }}"></script>
        <script src="{{ asset('public/assets2/modules/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('public/assets2/modules/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('public/assets2/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
        <script src="{{ asset('public/assets2/js/scripts.js') }}"></script>
        <script src="{{ asset('public/assets2/js/custom.js') }}"></script>
    </section>

</body>

</html>
