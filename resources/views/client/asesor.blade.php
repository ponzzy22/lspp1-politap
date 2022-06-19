@extends('layout/client')
@section('judul')
    Asesor | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Asesor.css') }}">
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
                                        class="u-file-icon u-icon u-icon-1"><img
                                            src="{{ asset('images/logo4/3126647.png') }}" alt=""></span>&nbsp;Data
                                    Asesor
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
    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_3a80">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($asesor as $asu)
                        <div class="u-align-center-xs u-container-style u-list-item u-repeater-item"
                            data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
                            <div class="u-container-layout u-similar-container u-valign-top-xs u-container-layout-1">
                                @if ($asu->image)
                                <img alt="{{ asset($asu->image) }}" class="u-image u-image-circle u-image-1" data-image-width="864"
                                data-image-height="1080">
                                @else
                                <img src="{{ asset('images/back/photo.png') }}" alt="" class="u-image u-image-circle u-image-1" data-image-width="864"
                                    data-image-height="1080">
                                @endif

                                <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
                                    <div class="u-container-layout u-container-layout-2">
                                        <h4 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-1">
                                            {{ $asu->nama }}
                                        </h4>
                                        <p class="u-text u-text-2">{{ $asu->nik }}</p>
                                        <p class="u-text u-text-3">{{ $asu->skema }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<br><br><br>
@endsection
