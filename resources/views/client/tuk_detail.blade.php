@extends('layout/client')
@section('judul')
    TUK | {{ $tuk->tuk }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Detail-tuk.css') }}">
@endsection
@section('isi')
    <section style="background-image: url('{{ asset('public/images/back/1.jpg') }}')" class="u-align-center u-clearfix u-image u-section-1" id="sec-035d" data-image-width="4000"
        data-image-height="2667">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                            src="" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                            <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-1"
                                src="">
                                <img class="u-expanded-width u-image u-image-1" src="{{ asset($tuk->image) }}" data-image-width="1080"
                                    data-image-height="1080" data-animation-name="bounceIn" data-animation-duration="1000"
                                    data-animation-direction="">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-radius-16 u-right-cell u-shape-round u-size-30 u-size-xs-60 u-white u-layout-cell-2"
                            data-href="https://nicepage.com" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2">
                                <h2 class="u-custom-font u-font-merriweather u-text u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="">{{ $tuk->tuk }}</h2>
                                <p class="u-text u-text-2" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">Kode TUK : {{ $tuk->kode }}</p>
                                <p class="u-text u-text-3" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="0"> Pengelola : {{ $tuk->pengelola }}</p>
                                <p class="u-text u-text-4" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="0">Alamat : {{ $tuk->alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
