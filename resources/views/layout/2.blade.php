<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | LSP P1-POLITAP</title>
    <!-- /////////////////////////////////// -->
    <!-- ASSETS -->
    <!-- /////////////////////////////////// -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/logo/lsp.png') }}" />
</head>

<body class="sidebar-mini">
    <div class="container-scroller">
        <!-- /////////////////////////////////// -->
        <!-- LOGO NAVIGASI -->
        <!-- /////////////////////////////////// -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('admin') }}"><img src="{{ asset('public/assets/images/logo/3.png') }}" alt="logo" /></a>
                <!-- /////////////////////////////////// -->
                <!-- LOGO MINI -->
                <!-- /////////////////////////////////// -->
                <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('public/assets/images/logo/mini3.png') }}" alt="logo" /></a>
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
                            <h5>WEBSITE ADMINISTRASI <i class="fas fa-ellipsis-h"></i> LEMBAGA SERTIFIKASI PROFESI PIHAK KESATU POLITAP</h5>
                        </div>
                    </li>
                </ul>
                <!-- /////////////////////////////////// -->
                <!-- ICON SOSIAL MEDIA -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link count-indicator" id="notificationDropdown" target="_blank" href="{{ url('/') }}">
                            <i class="fas fa-desktop mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link count-indicator" id="notificationDropdown" target="_blank" href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=lspp1-politap">
                            <i class="fas fa-database mx-0"></i>
                        </a>
                    </li>                    
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block"><i class="fas fa-cog"></i></div></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">{{ __('Profil') }}</a>
              <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          </li>
                    <!-- /////////////////////////////////// -->
                    <!-- PENCARIAN -->
                    <!-- /////////////////////////////////// -->
                    <li class="">
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
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- /////////////////////////////////// -->
            <!-- TEMA WEBSITE -->
            <!-- /////////////////////////////////// -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">Tema Sidebar</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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
                                <a href="#"> <img src="{{ asset('public/assets/images/faces/thumb-v-v-1.jpg') }}" alt="image" /></a>
                            </div>
                            <div class="profile-name">
                                <p class="name">
                                    Name Admin
                                </p>
                                <p class="designation">
                                    Administrator
                                </p>
                            </div>
                        </div>
                    </li>

                    <!-- /////////////////////////////////// -->
                    <!-- MENU SIDEBAR -->
                    <!-- /////////////////////////////////// -->
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('admin') }}>
                            <i class="fa fa-dot-circle  menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                            <i class="fa fa-home menu-icon"></i>
                            <span class="menu-title">Frontend Web</span>
                            <i class="menu-arrow"></i>
                        </a>                        
                        <div class="collapse" id="page-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href="{{ route('sett-beranda.index') }}">Judul & Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('beranda_img1.index') }}">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('beranda_img2.index') }}">Portofolio Karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('f_profil.index') }}">Profil LSP P1-POLITAP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('strorg.index') }}">Struktur Organisasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="fab fa-pagelines menu-icon"></i>
                            <span class="menu-title">Layanan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sidebar-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('skema.index') }}"> <i class="fas fa-ellipsis-h"></i> Skema</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('prodi.index') }}"> <i class="fas fa-ellipsis-h"></i> Prodi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('asesor.index') }}"> <i class="fas fa-ellipsis-h"></i> Asesor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('tuk.index') }}"> <i class="fas fa-ellipsis-h"></i> TUK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('unikom.index') }}"> <i class="fas fa-ellipsis-h"></i> Unit Kompetensi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-h"></i> Asesi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-info-circle menu-icon"></i>
                            <span class="menu-title">Berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-th-large menu-icon"></i>
                            <span class="menu-title">Galeri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-plus menu-icon"></i>
                            <span class="menu-title">Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-address-card menu-icon"></i>
                            <span class="menu-title">Login</span>
                        </a>
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
    </div>

    <!-- /////////////////////////////////// -->
    <!-- FOOTER -->
    <!-- /////////////////////////////////// -->
    <footer class="card card-statistics2">
        <div class="footer1">
            <span class="">Copyright © 2022 &diamondsuit; Designed & Developed By Politeknik Negeri Ketapang.</span>
        </div>
    </footer>


    <!-- /////////////////////////////////// -->
    <!-- JAVASCRIPTS -->
    <!-- /////////////////////////////////// -->
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
</body>


</html>