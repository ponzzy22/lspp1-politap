@extends('layout.client')
@section('judul')
    Berita LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/berita.css') }}" media="screen">
@endsection
@section('isi')
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
                </div>
            </div>
        </div>
    </section>

@endsection
