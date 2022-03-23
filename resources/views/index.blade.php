<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LSP-P1 POLITAP</title>
    <!-- /////////////////////////////////// -->
    <!-- ASSETS -->
    <!-- /////////////////////////////////// -->
    <link rel="stylesheet" href="public/assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="public/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="shortcut icon" href="public/assets/images/logo/lsp.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- /////////////////////////////////// -->
        <!-- LOGO NAVIGASI -->
        <!-- /////////////////////////////////// -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="https://www.kemdikbud.go.id/"><img src="public/assets/images/logo/1.png" alt="logo" /></a>
                <a class="navbar-brand brand-logo" href="https://politap.ac.id/"><img src="public/assets/images/logo/2.png" alt="logo" /></a>
                <a class="navbar-brand brand-logo" href="#"><img src="public/assets/images/logo/3.png" alt="logo" /></a>
                <!-- /////////////////////////////////// -->
                <!-- LOGO MINI -->
                <!-- /////////////////////////////////// -->
                <a class="navbar-brand brand-logo-mini" href="https://www.kemdikbud.go.id/"><img src="public/assets/images/logo/mini1.png" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="https://politap.ac.id/"><img src="public/assets/images/logo/mini2.png" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="public/assets/images/logo/mini3.png" alt="logo" /></a>
            </div>
            <!-- /////////////////////////////////// -->
            <!-- MENU NAVIGASI -->
            <!-- /////////////////////////////////// -->
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler  align-self-center" type="button" data-toggle="minimize">
                <span class="fas fa-bars"></span></button>
                <!-- /////////////////////////////////// -->
                <!-- PETA DAN ALAMAT -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#map" data-toggle="dropdown">
                            <i class="fas fa-map-marker mx-0"></i>
                        </a>
                    </li>
                    <li>
                        <div class="card-subtitle2">
                            <h5>Jalan Rangga Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112</h5>
                        </div>
                    </li>
                </ul>
                <!-- /////////////////////////////////// -->
                <!-- ICON SOSIAL MEDIA -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fab fa-facebook mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fab fa-instagram mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="fab fa-youtube mx-0"></i>
                        </a>
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
                                <input type="text" class="form-control" placeholder="Cari" aria-label="Search">
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


                    <!-- /////////////////////////////////// -->
                    <!-- MENU SIDEBAR -->
                    <!-- /////////////////////////////////// -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-home menu-icon"></i>
                            <span class="menu-title">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                            <i class="fab fa-trello menu-icon"></i>
                            <span class="menu-title">Profil</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> Visi & Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> Struktur Organisasi</a>
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
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> Skema</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> Asesor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> TUK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-ellipsis-v menu-icon"></i> Asesi</a>
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
                    <div class="page-header">
                        <h2>
                            LSP P1-POLITAP <br> Politeknik Negeri Ketapang
                        </h2>
                        <!-- /////////////////////////////////// -->
                        <!-- BREADCRUMB -->
                        <!-- /////////////////////////////////// -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
                                <li class="breadcrumb-item"><a href="#">Beranda </a></li>
                                <li class="breadcrumb-item">
                                    <a href="#"> </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"></li>

                            </ol>
                        </nav>
                    </div>
                    <!-- /////////////////////////////////// -->
                    <!-- CAROUSEL -->
                    <!-- /////////////////////////////////// -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-img-top">
                                <div class="owl-carousel owl-theme full-width">
                                    <div class="item">
                                        <img src="public/assets/images/carousel/banner_12.jpg" alt="image" />
                                    </div>
                                    <div class="item">
                                        <img src="public/assets/images/carousel/banner_2.jpg" alt="image" />
                                    </div>
                                    <div class="item">
                                        <img src="public/assets/images/carousel/banner_1.jpg" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /////////////////////////////////// -->
                    <!-- DESKRIPSI WEB -->
                    <!-- /////////////////////////////////// -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5> <i class="fas fa-globe"></i> DESKRIPSI WEB</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <!-- /////////////////////////////////// -->
                    <!-- SDM LSP  -->
                    <!-- /////////////////////////////////// -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5><i class="far fa-user"></i> SDM LSP P1-POLITAP</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row portfolio-grid">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="public/assets/images/photo-karyawan/1.png" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Budi Pratomo Sibuea, S.ST.,M.ST</h5> -->
                                                            <p>Ketua LSP P1 POLITAP </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="public/assets/images/photo-karyawan/4.png" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Ahmad Ravi, S.Pd.,M.Pd</h5> -->
                                                            <p>Manajer Mutu LSP P1 POLITAP </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="public/assets/images/photo-karyawan/3.png" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Firmanilah Kamil, S.Pd.,M.Pd</h5> -->
                                                            <p>Manajer Administrasi LSP P1 POLITAP</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="public/assets/images/photo-karyawan/2.png" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>A. Nova Zulfahmi, S.Pi.,M.Sc</h5> -->
                                                            <p>Manajer Sertifikasi LSP P1 POLITAP</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <!-- /////////////////////////////////// -->
                    <!-- PETA -->
                    <!-- /////////////////////////////////// -->
                    <div class="row" id="map">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5>
                                            <i class="fas fa-map-marker"></i> MAP</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-16 grid-margin ">
                                            <div class="card-body">
                                                <div class="map-container">
                                                    <div id="map-with-marker" class="google-map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /////////////////////////////////// -->
                        <!-- KALENDER -->
                        <!-- /////////////////////////////////// -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5>
                                            <i class="fas fa-calendar-alt"></i> KALENDER</h5>
                                    </div>
                                    <div id="inline-datepicker-example" class="datepicker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /////////////////////////////////// -->
                <!-- TERTAUT -->
                <!-- /////////////////////////////////// -->
                <div class="content-wrapper">
                    <div class="row grid-margin">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                        <div class="statistics-item">
                                            <div class="card-img">
                                                <img src="public/assets/images/logo/bnsp.png" width="150px" alt="">
                                            </div>
                                        </div>
                                        <div class="statistics-item">
                                            <div class="card-img">
                                                <img src="public/assets/images/logo/kemendikbud.png" width="90px" alt="">
                                            </div>
                                        </div>
                                        <div class="statistics-item">
                                            <div class="card-img">
                                                <img src="public/assets/images/logo/politap.png" width="90px" alt="">
                                            </div>
                                        </div>
                                        <div class="statistics-item">
                                            <div class="card-img">
                                                <img src="public/assets/images/logo/lsp.png" width="110px" alt="">
                                            </div>
                                        </div>
                                        <!-- /////////////////////////////////// -->
                                        <!-- KONTAK ADMIN -->
                                        <!-- /////////////////////////////////// -->
                                        <div class="statistics-item">
                                            <h5>Kontak Admin</h5>
                                            <p>
                                                <ul>
                                                    <li><i class="icon-sm far fa-comment mr-2"></i>08965386474683</li>
                                                    <li><i class="icon-sm far fa-envelope mr-2"></i>lsp@politap.ac.id</li>
                                                    <li><i class="icon-sm fab fa-instagram mr-2"></i>
                                                        <a href="https://www.instagram.com/lsppolitap/">lsppolitap</li>
                                                    </a>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////////////////////////////// -->
    <!-- FOOTER -->
    <!-- /////////////////////////////////// -->
    <footer class="card card-statistics">
        <div class="footer1">
            <span class="">Copyright © 2022 <a href="#" target="_blank"></a>. Designed & Developed By Politeknik Negeri Ketapang.</span>
        </div>
    </footer>


    <!-- /////////////////////////////////// -->
    <!-- JAVASCRIPTS -->
    <!-- /////////////////////////////////// -->
    <script src="public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="public/assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="public/assets/js/off-canvas.js"></script>
    <script src="public/assets/js/hoverable-collapse.js"></script>
    <script src="public/assets/js/misc.js"></script>
    <script src="public/assets/js/settings.js"></script>
    <script src="public/assets/js/todolist.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnT63XUjqjPgXZ0lFTU_pdpfUX7swzTTM&amp;callback=initMap"></script>
    <script src="public/assets/js/google-maps.js"></script>
    <script src="public/assets/js/dashboard.js"></script>
    <script src="public/assets/js/owl-carousel.js"></script>
</body>


</html>