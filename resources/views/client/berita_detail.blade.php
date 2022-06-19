@extends('layout/client')
@section('judul')
    {{ $berita->title }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Detail-Berita.css') }}">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-5 u-section-1" id="carousel_eba2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img src="{{ asset($berita->image) }}" alt="" class="u-image u-image-default u-image-1" data-image-width="1620"
                data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1000">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-60 u-white u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-text u-text-1" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                    {{ $berita->title }}
                                    <br>
                                </h2>
                                <div class="u-border-8 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
                                <p class="u-text u-text-custom-color-1 u-text-2" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">{{ $berita->created_at }}</p>
                                <p class="u-text u-text-custom-color-1 u-text-2" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">{{ $berita->kategori->kategori }}</p>
                                <p class="u-custom-font u-heading-font u-text u-text-3"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    {!! $berita->body !!}&nbsp;&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
