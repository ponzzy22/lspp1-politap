@extends('layout.client')
@section('judul')
    Struktur | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Pengelola.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-e83b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img
                                            src="{{ asset('images/logo4/erwre (1).png') }}"
                                            alt=""></span>&nbsp;Struktur Organisasi
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
    <section
        class="u-align-center u-clearfix u-grey-5 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-2"
        id="sec-035d"><br>
        <div class="u-list u-list-1">
            @foreach ($struktur as $asu)
                <img src="{{ asset($asu->image) }}" width="75%" alt="">
            @endforeach
        </div>
    </section>
@endsection
