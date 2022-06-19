@extends('layout.client')
@section('judul')
    Prosedur Sertifikasi | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Tutorial.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-ceb4">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img
                                            src="{{ asset('images/logo4/ewer.png') }}" alt=""></span>Prosedur
                                    Pendaftaran Sertifikasi
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
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-9399">
        @foreach ($tutorial2 as $asu)
            <img src="{{ $asu->image }}" width="75%" alt="">
        @endforeach
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-video u-video-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000">
                @foreach ($tutorial as $asu)
                    <div class="embed-responsive embed-responsive-1">
                        <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                            class="embed-responsive-item" src="{{ asset($asu->image) }}" frameborder="0"
                            allowfullscreen=""></iframe>
                    </div>
                @endforeach
            </div>
            <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000">Video Tutorial Pendaftaran
                Sertifikasi</h2>
        </div>
    </section>

@endsection
