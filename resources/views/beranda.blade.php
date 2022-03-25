@extends('layout/1')
@section('isi')
    
<div class="page-header">
    @foreach ($beranda as $apa)
        
    
    <h2>
        {{ $apa->judul }} <br> 
    </h2>
    @endforeach
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
</div><br>

 <!-- /////////////////////////////////// -->
                    <!-- CAROUSEL -->
                    <!-- /////////////////////////////////// -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-img-top">
                                <div class="owl-carousel owl-theme full-width">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/carousel/banner_12.jpg') }}" alt="image" />
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/carousel/banner_2.jpg') }}" alt="image" />
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/carousel/banner_1.jpg') }}" alt="image" />
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
                                                        <img src="{{ asset('assets/images/photo-karyawan/1.png') }}" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Budi Pratomo Sibuea, S.ST.,M.ST</h5> -->
                                                            <p>Ketua LSP P1 POLITAP </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="{{ asset('assets/images/photo-karyawan/4.png') }}" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Ahmad Ravi, S.Pd.,M.Pd</h5> -->
                                                            <p>Manajer Mutu LSP P1 POLITAP </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="{{ asset('assets/images/photo-karyawan/3.png') }}" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Firmanilah Kamil, S.Pd.,M.Pd</h5> -->
                                                            <p>Manajer Administrasi LSP P1 POLITAP</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="{{ asset('assets/images/photo-karyawan/2.png') }}" alt="image" />
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

@endsection