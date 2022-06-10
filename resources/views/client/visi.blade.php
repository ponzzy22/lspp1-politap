@extends('layout.client')
@section('judul')
    Visi Misi & Motto | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Visi.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-f13c">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img src="{{ asset('public/images/logo3/15.png') }}"
                                            alt=""></span>Visi Misi dan Motto LSP - POLITAP
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($visi as $asu)
        <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-fd7d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                {!! $asu->visi !!}
            </p>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-3" id="sec-34b5">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                {!! $asu->misi !!}
            </p>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-4" id="sec-e1b6">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                {!! $asu->motto !!}
            </p>
        </div>
    </section>
    @endforeach

@endsection
