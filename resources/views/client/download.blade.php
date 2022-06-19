@extends('layout/client')
@section('judul')
    Lisensi Lembaga | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Skema.css') }}">
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
                                            src="{{ asset('images/logo4/ddddd.png') }}"
                                            alt=""></span>&nbsp;Lisensi Lembaga
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

    <section class="u-clearfix u-grey-5 u-section-2" src="" id="sec-83b6">
        <div class="u-align-center u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                @foreach ($file as $asu)
                    <h2>{{ $asu->file }}</h2>
                    <embed src="{{ asset($asu->image) }}" width="75%" height="300px"><br><br>
                @endforeach
            </div>
        </div>
    </section>
@endsection
