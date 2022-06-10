@extends('layout/client')
@section('judul')
    Asesor | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Asesor.css') }}">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-ed28">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div
                class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('public/images/logo2/15.png') }}" alt=""></span>&nbsp;Daftar
                                    Asesor
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="carousel_8c69">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($asesor as $asu)
                    <div class="u-container-style u-list-item u-repeater-item" data-animation-name="flipIn"
                        data-animation-duration="2000" data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <div class="u-container-style u-group u-shape-rectangle u-white u-group-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1000"
                                data-animation-direction="">
                                <div class="u-container-layout u-container-layout-2">
                                    <a href="{{ route('asesor_detail', $asu->id) }}"><img alt="" class="u-image u-image-default u-image-1" data-image-width="1280"
                                        data-image-height="853" src="{{ $asu->image }}"></a>
                                    <a href="{{ route('asesor_detail', $asu->id) }}"><h4
                                        class="u-align-center u-custom-font u-font-montserrat u-text u-text-palette-4-base u-text-1">
                                        {{ $asu->nama }}</h4></a>
                                    <p class=" u-align-center u-text u-text-2">{{ $asu->nik }}</p>
                                    <p class="u-align-center u-text u-text-2">{{ $asu->skema }}</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-grey-10 u-section-3" id="sec-327c">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

@endsection
