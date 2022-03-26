@extends('layout/1')
@section('isi')
    
<div class="page-header">
    @foreach ($beranda as $jodi)
        
    
    <h2>
        {{ $jodi->judul }} <br> {{ $jodi->judul2 }}
    </h2>
    
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            {{-- <li class="breadcrumb-item">
                <a href="#"> </a>
            </li> --}}
            <li class="breadcrumb-item active" aria-current="page"></li>

        </ol>
    </nav>
    @endforeach
</div><br>

 <!-- /////////////////////////////////// -->
                    <!-- CAROUSEL -->
                    <!-- /////////////////////////////////// -->
                    
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            
                            <div class="card-img-top">
                                
                                <div class="owl-carousel owl-theme full-width">
                                    @foreach ($image as $asu)
                                    <div class="item">
                                        <img src="{{ asset($asu->image) }}" alt="image" />
                                    </div>@endforeach
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
                                @foreach ($beranda as $jodi)
                                <div class="card-body">
                                    <div class="card-title">
                                        
                                        <h5> <i class="fas fa-globe"></i> DESKRIPSI WEB</h5>
                                    </div>
                                    <h4>{{ $jodi->deskripsi }}</h4>
                                </div>
                                @endforeach
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

                                                @foreach ($image2 as $asu)
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <figure class="effect-text-in">
                                                        <img src="{{ asset($asu->image) }}" alt="image" />
                                                        <figcaption>
                                                            <!-- <h5>Budi Pratomo Sibuea, S.ST.,M.ST</h5> -->
                                                            <p>{{ $asu->keterangan }}</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                @endforeach

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