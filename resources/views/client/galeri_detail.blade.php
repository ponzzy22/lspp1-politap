@extends('layout/client')
@section('judul')
    Galeri | {{ $galeri->galeri }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Detail-Album.css') }}">
@endsection
@section('isi')
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_95bf">
        <div class="u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout">
                <h2 class="u-align-center u-text u-text-1"> {{ $galeri->galeri }}</h2>
            </div>
        </div>
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
                @foreach ($galeri->galeri_fotos as $foto)
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
                    <div class="u-back-slide" data-image-width="1380" data-image-height="920">
                        <img class="u-back-image u-expanded" src="{{ asset($foto->image) }}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <p class="u-align-right u-text u-text-custom-color-1 u-text-2">{{ $galeri->created_at }} </p>
    </section>

@endsection
