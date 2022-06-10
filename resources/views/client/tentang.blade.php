@extends('layout.client')
@section('judul')
    Tentang | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Tentang.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-c910">
        <div
            class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction=""><span class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('public/images/logo2/12.png') }}" alt=""></span>&nbsp;Tentang
                                    LSP - POLITAP
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-clearfix u-grey-10 u-section-2" id="sec-7530">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div style="background-image: url('{{ asset('public/images/logo2/sdsd.png') }}')"
                class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-image-1"
                data-image-width="4155" data-image-height="1597" data-animation-name="bounceIn"
                data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-1">
                    @foreach ($profil as $asu)
                        <p class="u-text u-text-body-alt-color u-text-1" data-animation-name="bounceIn"
                            data-animation-duration="1000" data-animation-direction="">
                            {!! $asu->profil !!}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
