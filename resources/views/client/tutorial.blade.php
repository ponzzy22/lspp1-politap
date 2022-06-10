@extends('layout.client')
@section('judul')
    Prosedur Sertifikasi | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/tutorial.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-ceb4">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div
                                class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('public/images/logo2/14.png') }}" alt=""></span>Prosedur
                                    Pendaftaran Sertifikasi
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="u-align-center u-clearfix u-section-2" id="sec-5802"><br>
        @foreach ($tutorial2 as $asu)
                <img src="{{ $asu->image }}" width="75%" alt="">
            @endforeach
        <h2 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
            Video Tutorial Pendaftaran Sertifikasi</h2>
        <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-video u-video-1" data-animation-name="bounceIn"
            data-animation-duration="1000" data-animation-direction="">
            @foreach ($tutorial as $asu)
                <div class="embed-responsive embed-responsive-1">
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                        class="embed-responsive-item" src="{{ asset($asu->image) }}" frameborder="0"
                        allowfullscreen=""></iframe>
                </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
