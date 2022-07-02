@extends('layout.client')
@section('judul')
    Pengelola | LSP-POLITAP
@endsection

@section('css')
<<<<<<< HEAD
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400";

        .content {
            position: relative;
            animation: animatop 0.9s cubic-bezier(0.425, 1.14, 0.47, 1.125) forwards;
        }

        .card {
            width: 500px;
            min-height: 100px;
            padding: 20px;
            border-radius: 3px;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .card:after {
            content: '';
            display: block;
            width: 190px;
            height: 300px;
            background: #b80303c5;
            position: absolute;
            animation: rotatemagic 0.75s cubic-bezier(0.425, 1.04, 0.47, 1.105) 1s both;
        }

        .badgescard {
            padding: 10px 20px;
            border-radius: 3px;
            background-color: #980404e7;
            color: #fff;
            width: 480px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            position: absolute;
            z-index: -1;
            left: 10px;
            bottom: 10px;
            animation: animainfos 0.5s cubic-bezier(0.425, 1.04, 0.47, 1.105) 0.75s forwards;
        }

        .badgescard span {
            font-size: 1.6em;
            margin: 0px 6px;
            color: #fff opacity: 0.6;
        }

        .firstinfo {
            flex-direction: row;
            z-index: 2;
            position: relative;
        }

        .firstinfo img {
            border-radius: 50%;
            width: 100px;
            height: 120px;
        }

        .firstinfo .profileinfo {
            padding: 0px 20px;
        }

        .firstinfo .profileinfo h1 {
            font-size: 1.8em;
        }

        .firstinfo .profileinfo h3 {
            font-size: 1.2em;
            color: #000000;
            /* font-style: italic; */
        }

        .firstinfo .profileinfo p.bio {
            padding: 10px 0px;
            color: #000000;
            line-height: 1.2;
            font-style: initial;
        }

        @keyframes animatop {
            0% {
                opacity: 0;
                bottom: -500px;
            }

            100% {
                opacity: 1;
                bottom: 0px;
            }
        }

        @keyframes animainfos {
            0% {
                bottom: 10px;
            }

            100% {
                bottom: -42px;
            }
        }

        @keyframes rotatemagic {
            0% {
                opacity: 0;
                transform: rotate(0deg);
                top: -24px;
                left: -253px;
            }

            100% {
                transform: rotate(-30deg);
                top: -24px;
                left: -78px;
            }
        }
    </style>
=======
    <link rel="stylesheet" href="{{ asset('client/Pengelola.css') }}" media="screen">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pengelola SDM</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Koten ***** -->
    <!-- Pengelola -->
    <div class="more-info">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($pengelola as $asu)
                        <div style="margin-bottom: 7%; margin-right: 3%" class="content">
                            <div class="card">
                                <div class="firstinfo"><img src="{{ $asu->image }}" />
                                    <div class="profileinfo">
                                        <h1 class="font-weight-bold text-dark">{{ $asu->nama }}</h1>
                                        <h3 class="font-weight-bold">{{ $asu->keterangan }}</h3>
                                        {{-- <p class="bio">fgdf</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="badgescard">
                                <a style="color: #fff" href="#"><span class="fa fa-facebook"></span></a>
                                <a style="color: #fff" href="#"><span class="fa fa-twitter"> </span></a>
                                <a style="color: #fff" href="#"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-e83b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img src="{{ asset('images/logo4/erwre (2).png') }}"
                                            alt=""></span>&nbsp;Pengelola LSP-POLITAP
                                </h1>
                                <div class="u-border-3 u-border-custom-color-1 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-2" src="" id="carousel_752a" src="" id="carousel_752a">
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach ($pengelola as $asu)
                <div
                    class="u-align-center u-container-style u-grey-5 u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-1">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <img alt="" class="u-image u-image-round u-radius-30 u-image-1" src="{{ $asu->image }}"
                            data-image-width="1380" data-image-height="920">
                        <h5 class="u-text u-text-black u-text-default u-text-1">{{ $asu->nama }}</h5>
                        <p class="u-text u-text-grey-50 u-text-2">{{ $asu->keterangan }}</p>
                    </div>
                </div>
                @endforeach
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
