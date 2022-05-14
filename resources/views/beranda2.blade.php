@extends('layout/6')
@section('isi')
    {{-- <---------------------- PROFIL ----------------------> --}}
    <div id="profil" class="card col-md-12">
        <div class="card-body" style="background-size: cover" style="background-repeat: no-repeat">
            <h4 class="text text-primary" data-aos="fade-up" data-aos-delay="100"><i class="fas fa-building"></i> Tentang
                Kami</h4><br>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <ul class="nav nav-pills nav-pills-primary" id="pills-tab-custom" role="tablist">
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="100">
                            <a class="nav-link active show" id="pills-home-tab-custom" data-toggle="pill"
                                href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                PROFIL LSP - POLITAP
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="200">
                            <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                role="tab" aria-controls="pills-profile" aria-selected="false">
                                VISI
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300">
                            <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                role="tab" aria-controls="pills-contact" aria-selected="false">
                                MISI
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400">
                            <a class="nav-link" id="pills-vibes-tab-custom" data-toggle="pill" href="#pills-vibes"
                                role="tab" aria-controls="pills-contact" aria-selected="false">
                                MOTO
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500">
                            <a class="nav-link" id="pills-energy-tab-custom" data-toggle="pill" href="#pills-energy"
                                role="tab" aria-controls="pills-contact" aria-selected="false">
                                STRUKTUR ORGANISASI
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-content-custom-pill" id="pills-tabContent-custom">
                        @foreach ($profil as $asu)
                            <div class="tab-pane fade active show" id="pills-health" role="tabpanel"
                                aria-labelledby="pills-home-tab-custom">
                                <div class="media">
                                    <img class="mr-5 w-25 rounded" src="{{ asset($asu->image) }}" alt="image"
                                        data-aos="fade-up" data-aos-delay="600">
                                    <div class="media-body" data-aos="fade-up" data-aos-delay="600">
                                        <p>
                                            {!! $asu->profil !!}
                                        </p>
                                    </div>
                                </div><br>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    {!! $asu->isi !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-career" role="tabpanel"
                                aria-labelledby="pills-profile-tab-custom">
                                <div class="media">
                                    <div class="media-body">
                                        <p>
                                            {!! $asu->visi !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-music" role="tabpanel"
                                aria-labelledby="pills-contact-tab-custom">
                                <div class="media">
                                    <div class="media-body">
                                        <p>
                                            {!! $asu->misi !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-vibes" role="tabpanel"
                                aria-labelledby="pills-vibes-tab-custom">
                                <div class="media">
                                    <div class="media-body">
                                        <p>
                                            {!! $asu->motto !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($strorg as $asu)
                            <div class="tab-pane fade" id="pills-energy" role="tabpanel"
                                aria-labelledby="pills-energy-tab-custom">
                                <div class="media">
                                    <img style="width: 800px" src="{{ asset($asu->image) }}" alt="image"
                                        data-aos="fade-up" data-aos-delay="700">
                                    <div class="media-body" data-aos="fade-up" data-aos-delay="700">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('profil.front') }}" data-aos="fade-right" data-aos-delay="600" style="padding-left: 90%"><button
                            class="btn btn-black"><i class="fas fa-arrow-alt-circle-right"></i> Halaman Profil</button></a>
                </div>
            </div>
        </div>
    </div><br><br>


    {{-- <---------------------- LAYANAN ----------------------> --}}
    {{-- <div id="layanan" class="card">
        <div class="card-body">
            <h4 class="text text-primary" data-aos="fade-right" data-aos-delay="100"><i class="fab fa-pagelines"></i>
                Layanan di LSP - POLITAP</h4>
            <br>
            <div class="row">
                <div class="col-4">
                    <ul class="nav nav-tabs nav-tabs-vertical-custom" role="tablist" data-aos="flip-right"
                        data-aos-delay="100">
                        <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                            <a class="nav-link active show" id="home-tab-custom" data-toggle="tab" href="#home-3" role="tab"
                                aria-controls="home-3" aria-selected="true">
                                <h4>&diamond; Skema</h4>
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                            <a class="nav-link" id="profile-tab-custom" data-toggle="tab" href="#profile-3" role="tab"
                                aria-controls="profile-3" aria-selected="false">
                                <h4>&diamond; Tempat Uji Kompetensi</h4>
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                            <a class="nav-link" id="contact-tab-custom" data-toggle="tab" href="#contact-3" role="tab"
                                aria-controls="contact-3" aria-selected="false">
                                <h4>&diamond; Asesor</h4>
                            </a>
                        </li>
                        <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                            <a class="nav-link" id="contact-tab-custom" data-toggle="tab" href="#contact-4" role="tab"
                                aria-controls="contact-4" aria-selected="false">
                                <h4>&diamond; Pemegang Sertifikat</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-7">
                    <div class="tab-content tab-content-vertical tab-content-vertical-custom">
                        <div class="tab-pane fade active show" id="home-3" role="tabpanel"
                            aria-labelledby="home-tab-custom">
                            <h3 class="font-weight-normal" data-aos="fade-left" data-aos-delay="300"><i
                                    class="fas fa-edit"></i> Skema Yang Kami Miliki</h3>
                            <div class="card-body">
                                <div class="table-responsive" data-aos="fade-left" data-aos-delay="400">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Kode Skema
                                                </th>
                                                <th>
                                                    Skema
                                                </th>
                                                <th>
                                                    Detail
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->kode_skema }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->skema }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('uiskema.show', $asu->id) }}"><i
                                                                class="fas fa-eye"></i> Lihat Detail</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-custom">
                            <h3 class="font-weight-normal"><i class="fas fa-building"></i> Fasilitas
                                Uji
                                Kompetensi Yang Tersedia</h3>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    TUK
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tuk as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->tuk }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-3" role="tabpanel" aria-labelledby="contact-tab-custom">
                            <h3 class="font-weight-normal"><i class="fas fa-users"></i> Daftar
                                Asesor
                            </h3>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Kode Asesor
                                                </th>
                                                <th>
                                                    Nama Asesor
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asesor as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->nik }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->nama }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-custom">
                            <h3 class="font-weight-normal"><i class="fas fa-certificate"></i> Daftar
                                Pemegang Sertifikat</h3>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Kode Registrasi
                                                </th>
                                                <th>
                                                    Nama Asesi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sertifikat as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->id }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->user_name }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" data-aos="fade-up" data-aos-delay="500" style="padding-left: 82%"><button class="btn btn-black"><i
                        class="fas fa-arrow-alt-circle-right"></i> Halaman Layanan</button></a>
        </div>
    </div><br> --}}

    {{-- <---------------------- BERITA ----------------------> --}}
    <h4 class="text text-primary" data-aos="fade-up" data-aos-delay="100"><i class="fas  fa-bullhorn"></i>
        Berita Seputar LSP - POLITAP </h4>
    <div class="row">
        @foreach ($artikel as $asu)
            <div class="o-card" id="berita" data-aos="zoom-in" data-aos-delay="200">
                <div class="o-card_header">
                    <div class="o-card_headerHeroImg" data-image="{{ asset($asu->image) }}">
                    </div>
                </div>
                <div class="o-card_body">
                    <h3 class="o-card_title">{{ $asu->title }}</h3>
                    <h3 class="o-card_subTitle" class="text text-small">{{ $asu->created_at->diffforhumans() }}</h3>
                    <p class="o-card_paragraph">{!! $asu->excerpt !!} </p>
                </div>
                <div class="o-card_footer">
                    <a href="{{ route('berita.tampil', $asu->id) }}" class="btn btn-black" target="_blank">Lihat Detail
                        <i class="icon-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div><br>

    {{-- <---------------------- FLIP CARD KARYAWAN ----------------------> --}}
        <div id="pengelola" class="col-md-12" style="padding-left: 5%">
            <h4 class="text text-primary" data-aos="fade-right" data-aos-delay="100"><i class="fas fa-users"></i>
                Pengelola LSP - POLITAP</h4>
            <div class="row">
                @foreach ($karyawan as $asu)
                    <div class="flip-card" style="padding-top: 30px" data-aos="zoom-in" data-aos-delay="200">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img style="padding-top: 14%" height="240px" src="{{ asset($asu->image) }}" alt=""
                                    width="150px">
                            </div>
                            <div class="flip-card-back">
                                <p></p>
                                <p>{{ $asu->nama }}</p>
                                <p>{{ $asu->keterangan }}</p>
                                <img style="padding-top: 4%" height="100px" src="{{ asset($asu->image) }}" alt="">
                                <br><br><br>
                                {{-- <p>{{ $asu->no_hp }}</p> --}}
                                <p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ $asu->facebook }}" type="_blank"><button type="button"
                                            class="btn btn-dark"><i class="fab fa-facebook"></i></button></a>
                                    <a href="{{ $asu->instagram }}" type="_blank"><button type="button"
                                            class="btn btn-dark"><i class="fab fa-instagram"></i></button></a>
                                    <a href="{{ $asu->twitter }}" type="_blank"><button type="button"
                                            class="btn btn-dark"><i class="fab fa-twitter"></i></button></a>
                                    <a href="{{ $asu->email }}" type="_blank"><button type="button"
                                            class="btn btn-dark"><i class="far fa-envelope "></i></button></a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div><br>
                @endforeach
            </div>
        </div>


    {{-- <---------------------- PETA ----------------------> --}}
    <h4 style="padding-left: 5%" class="text text-primary" data-aos="fade-right" data-aos-delay="100"><i class="fas fa-map"></i>
        Peta Lokasi LSP - POLITAP</h4><br>
    <div class="row" style="padding-left: 5%">
        <div class="col-md-6">
            <iframe data-aos="zoom-in" data-aos-delay="200"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.250339779255!2d109.988631!3d-1.8168375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1650546915934!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div data-aos="zoom-in" data-aos-delay="200 class="card"></div><div data-aos="zoom-in" data-aos-delay="200 class="card"></div>
        <div class="card col-md-5" data-aos="zoom-in" data-aos-delay="200">
            <img class="rounded-0" style="padding-top: 7% ; padding-left: 10%"
                src="{{ asset('public/assets/images/gedung/IMG_20220420_131245.jpg') }}" width="180px" height="110px"
                alt="">
            <h5 style="padding-top: 10%; padding-left: 2%" class="text text-primary">Alamat:</h5>
            <p style="padding-left: 2%">
                Lembaga Sertifikasi Politap Negeri Ketapang
            </p>
            <p style="padding-left: 2%">
                Gedung Kuliah POLITAP Lantai 1
            </p>
            <p style="padding-left: 2%">
                Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112
            </p>
            <h5 style="padding-top: 10%; padding-left: 2%" class="text text-primary">Kontak Admin LSP - POLITAP:</h5>
            <div class="row">
                <div style="padding-left: 5%">
                    <i class="fas fa-phone"> 08965386474683</i>
                </div>
                <div style="padding-left: 3%">
                    <i class="fas fa-envelope"> lsp@politap.ac.id</i>
                </div>
                <div style="padding-left: 3%">
                    <a href="https://www.instagram.com/lsppolitap/" target="_blank" rel="noopener noreferrer"> <i
                            class="fab fa-instagram"> lsppolitap</i></a>
                </div>
            </div>
        </div>

    </div><br><br><br>


    {{-- <---------------------- TAUTAN ----------------------> --}}
    <h4 style="padding-left: 10%" class="text text-primary" data-aos="fade-right" data-aos-delay="100"><i class="fas fa-university"></i>
        Lembaga yang Tertaut</h4>
    <div style="padding-left: 13%; padding-right: 13%" class="card-body">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="statistics-item">
                <div class="card-img" data-aos="fade-up" data-aos-delay="200">
                    <img src="public/assets/images/logo/bnsp.png" width="150px" alt="">
                </div>
            </div>
            <div class="statistics-item">
                <div class="card-img" data-aos="fade-up" data-aos-delay="200">
                    <img src="public/assets/images/logo/kemendikbud.png" width="90px" alt="">
                </div>
            </div>
            <div class="statistics-item">
                <div class="card-img" data-aos="fade-up" data-aos-delay="200">
                    <img src="public/assets/images/logo/politap.png" width="90px" alt="">
                </div>
            </div>
            <div class="statistics-item">
                <div class="card-img" data-aos="fade-up" data-aos-delay="200">
                    <img src="public/assets/images/logo/lsp.png" width="110px" alt="">
                </div>
            </div>
        </div>
    </div><br>
@endsection
