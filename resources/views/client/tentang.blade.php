@extends('layout.client')
@section('judul')
    Tentang | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Logo.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-942b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img src="{{ asset('images/logo/58061.png') }}"
                                            alt=""></span>&nbsp;Tentang LSP-POLITAP
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
    <section class="u-clearfix u-grey-5 u-section-2" id="sec-73aa">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-60 u-size-xs-60 u-image-1"
                            src="" data-image-width="1280" data-image-height="853">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                @foreach ($profil as $asu)
                                <p class="u-text u-text-1">
                                    {!! $asu->profil !!}
                                </p>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
