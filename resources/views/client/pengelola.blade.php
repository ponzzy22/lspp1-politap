@extends('layout.client')
@section('judul')
    Pengelola | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Pengelola.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-c910">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('public/images/logo3/16.png') }}" alt=""></span>&nbsp;Pengelola
                                    LSP-POLITAP
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-align-center u-clearfix u-palette-2-base u-section-2" src="" id="carousel_752a">
        <div class="u-expanded-width u-grey-10 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach ($pengelola as $asu)
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <a href="{{ route('pengelola_detail', $asu->id) }}"><img alt="" class="u-image u-image-round u-radius-30 u-image-1" src="{{ $asu->image }}"
                                data-image-width="1380" data-image-height="920"></a>
                            <a href="{{ route('pengelola_detail', $asu->id) }}"><h5 class="u-text u-text-black u-text-default u-text-1">
                                {{ $asu->nama }}
                            </h5></a>
                            <p class="u-text u-text-grey-50 u-text-2">
                                {{ $asu->keterangan }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
