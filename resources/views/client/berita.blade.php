@extends('layout.client')
@section('judul')
    Berita | LSP POLITAP
@endsection

@section('berita')
    active
@endsection

@section('css')
<<<<<<< HEAD
    <style>
        section {
            padding: 100px 0;
        }

        html,
        body {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #ffe3ee 100%);
        }

        h1 {
            font-size: 200%;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 400;
        }

        header p {
            font-family: "Allura";
            color: rgba(255, 255, 255, 0.2);
            margin-bottom: 0;
            font-size: 60px;
            margin-top: -30px;
        }

        .timeline {
            position: relative;
        }

        .timeline::before {
            content: "";
            background: #C5CAE9;
            width: 5px;
            height: 95%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            width: 100%;
            margin-bottom: 70px;
        }

        .timeline-item:nth-child(even) .timeline-content {
            float: right;
            padding: 40px 30px 10px 30px;
        }

        .timeline-item:nth-child(even) .timeline-content .date {
            right: auto;
            left: 0;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            content: "";
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            left: -15px;
            border-width: 10px 15px 10px 0;
            border-color: transparent #f5f5f5 transparent transparent;
        }

        .timeline-item::after {
            content: "";
            display: block;
            clear: both;
        }

        .timeline-content {
            position: relative;
            width: 45%;
            padding: 10px 30px;
            border-radius: 4px;
            background: #f5f5f5;
            box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
        }

        .timeline-content::after {
            content: "";
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            right: -15px;
            border-width: 10px 0 10px 15px;
            border-color: transparent transparent transparent #f5f5f5;
        }

        .timeline-img {
            width: 30px;
            height: 30px;
            background: #b60f0f;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            margin-top: 25px;
            margin-left: -15px;
        }


        a:hover,
        a:active,
        a:focus {
            background: #8f323a;
            color: #FFFFFF;
            text-decoration: none;
        }

        .timeline-card {
            padding: 0 !important;
        }

        .timeline-card p {
            padding: 0 20px;
        }

        .timeline-card a {
            margin-left: 20px;
        }

        .timeline-item .timeline-img-header {
            /* background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url("https://picsum.photos/1000/800/?random") center center no-repeat; */
            background-size: cover;
        }

        .timeline-img-header {
            height: 200px;
            position: relative;
            margin-bottom: 20px;
        }

        .timeline-img-header h2 {
            color: #FFFFFF;
            position: absolute;
            bottom: 5px;
            left: 20px;
        }

        blockquote {
            margin-top: 30px;
            color: #757575;
            border-left-color: #c1192f;
            padding: 0 20px;
        }

        .date {
            background: #0b0606;
            display: inline-block;
            color: #FFFFFF;
            padding: 10px;
            position: absolute;
            top: 0;
            right: 0;
        }

        @media screen and (max-width: 768px) {
            .timeline::before {
                left: 50px;
            }

            .timeline .timeline-img {
                left: 50px;
            }

            .timeline .timeline-content {
                max-width: 100%;
                width: auto;
                margin-left: 70px;
            }

            .timeline .timeline-item:nth-child(even) .timeline-content {
                float: none;
            }

            .timeline .timeline-item:nth-child(odd) .timeline-content::after {
                content: "";
                position: absolute;
                border-style: solid;
                width: 0;
                height: 0;
                top: 30px;
                left: -15px;
                border-width: 10px 15px 10px 0;
                border-color: transparent #f5f5f5 transparent transparent;
            }
        }
    </style>
=======
    <link rel="stylesheet" href="{{ asset('client/berita.css') }}" media="screen">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('javascript')
    <script>
        $(function() {

            window.sr = ScrollReveal();

            if ($(window).width() < 768) {

                if ($('.timeline-content').hasClass('js--fadeInLeft')) {
                    $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
                }

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            } else {

                sr.reveal('.js--fadeInLeft', {
                    origin: 'left',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            }

            sr.reveal('.js--fadeInLeft', {
                origin: 'left',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

            sr.reveal('.js--fadeInRight', {
                origin: 'right',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });


        });
    </script>
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-info-circle"></i> Berita / Artikel </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-9790">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo/3627699.png') }}"
                                            alt=""></span>&nbsp;Berita
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

    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-1a7e">
        <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    @foreach ($berita as $asu)
                    <div class="u-layout-row" style="">
                        <div style="background-image: url('{{ $asu->image }}')" class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-xs-60 u-image-1"
                            src="" data-image-width="1280" data-image-height="956">
                            <div class="u-container-layout u-container-layout-1" src=""></div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-45 u-size-xs-60 u-white u-layout-cell-2"
                            data-animation-name="" data-animation-duration="0" data-animation-direction="">
                            <div class="u-container-layout u-container-layout-2">
                                <a href="{{ route('berita_detail', $asu->id) }}"><h2 style="color: #000" class="u-align-left u-custom-font u-font-roboto u-text u-text-1">{{ $asu->title }}</h2></a>
                                <p class="u-align-left u-custom-font u-heading-font u-text u-text-2">
                                    {{ $asu->excerpt }}
                                </p>
                                <a href="{{ route('berita_detail', $asu->id) }}"
                                    class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-palette-1-dark-1 u-btn-1">LiHAT
                                    DETAIL&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('images/logo4/10.png') }}" alt=""></span>
                                </a>
                                <p class="u-align-right u-text u-text-custom-color-1 u-text-3">{{ $asu->created_at }}</p>
                            </div>
                        </div>
                    </div><hr>
                    @endforeach
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->


 <!-- ***** Konten ***** -->
    <!-- Berita -->
    <section class="timeline">
        <div class="container">
            @foreach ($berita as $asu)
            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content timeline-card js--fadeInRight">
                    <div style="background-image: url('{{ $asu->image }}')" class="timeline-img-header">
                        <h2 style="font-size: 20px">{{ $asu->title }}</h2>
                    </div>
                    <div class="date">{{ $asu->created_at->format('d/M/Y') }}</div>
                    <p>{{ $asu->excerpt }}</p>
                    <a class="btn btn-danger" style="margin-left: 70%; margin-bottom: 20px" href="{{ route('berita_detail', Crypt::encryptString($asu->id) ) }}">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
<<<<<<< HEAD
 <!-- ***** Akhir Konten ***** -->
=======

>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
