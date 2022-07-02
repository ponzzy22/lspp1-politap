@extends('layout.client')
@section('judul')
    Galeri | LSP POLITAP
@endsection
<<<<<<< HEAD

@section('galeri')
    active
@endsection

@section('css')
    <style>
        em {
            color: #b00909
        }

        .flip-boxes {
            justify-content: center;
        }

        .flip-box {
            display: flex;
            align-content: stretch;
            min-height: 200px;
            flex-wrap: wrap;
            position: relative;
            border: 10px solid transparent;
            padding: 0;
            border-top: 0;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .flip-box:hover .back {
            transform: rotateY(0deg);
            z-index: 10;
        }

        .flip-box:hover .front {
            transform: rotateY(180deg);
            z-index: -1;
        }

        .flip-box .back,
        .flip-box .front {
            position: relative;
            background-color: #1b2d61;
            color: white;
            display: flex;
            justify-content: center;
            align-content: center;
            flex: 0 0 100%;
            -webkit-transition: all 1s cubic-bezier(0.5, 1, 0.5, 1);
            transition: all 1s cubic-bezier(0.5, 1.3, 0.5, 1.3);
            transform-style: preserve-3d;
            background-size: cover;
            background-position: center;
        }

        .flip-box .back {
            background-color: #a50b0bb5;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            z-index: -1;
            transform: rotateY(-180deg);
        }

        .flip-box .back:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 30px;
            border: 15px solid transparent;
            border-bottom-color: white;
            border-left-color: white;
        }

        .flip-box .front {
            z-index: 10;
        }

        .flip-box .front .content {
            font-size: 2rem;
        }

        .flip-box .front:after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30px;
            height: 30px;
            border: 15px solid #cecece;
            border-bottom-color: white;
            border-right-color: white;
        }

        .flip-box .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            -webkit-transform: translateZ(50px);
            transform: translateZ(50px);
            text-shadow: 0px 0px 2px black;
        }
    </style>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-images"></i> Galeri Kegiatan </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
=======
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Galeri.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-030d">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo4/1160409.png') }}"
                                            alt=""></span>Galeri
                                </h1>
                                <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="sec-7d73">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($galeri as $asu)
                    <div class="u-align-center u-container-style u-image u-image-round u-list-item u-radius-24 u-repeater-item u-shading u-image-1"
                        data-image-width="2000" data-image-height="1333" data-href="{{ route('galeri_detail', $asu->id) }}"
                        data-animation-name="customAnimationIn" data-animation-duration="1000">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h3 class="u-custom-font u-font-ubuntu u-text u-text-1">{{ $asu->galeri }}</h3>
                            <p class="u-text u-text-2">{{ $asu->created_at }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                </a>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Galeri -->
    <div style="margin-top: 60px; margin-bottom: 60px" class="">
        <div class="container">
            <div class="section-heading">
                <h2>Album <em> Kegiatan</em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                @foreach ($galeri as $asu)
                    <a href="{{ route('galeri_detail', Crypt::encryptString($asu->id)) }}"
                        class="col-md-3 col-sm-4 col-8 flip-box">
                        <div class="front" style="background-image: url('https://picsum.photos/1000/800/?random');">
                            <div class="content text-center">
                                {{ $asu->galeri }}
                                <br>
                                <span class="click-for-more">
                                </span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="content">
                                {{ $asu->galeri }} <br>
                                {{ $asu->created_at->format('d-M-Y') }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ***** Akhir Konten ***** -->
@endsection
