@extends('layout.client')
@section('judul')
    Skema | {{ $skema->skema }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Detail-Skema.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-align-center u-clearfix u-palette-5-light-3 u-section-1" id="sec-59d5">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000">{{ $skema->skema }}</h1>
            <p class="u-align-center u-text u-text-palette-2-base u-text-2" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-direction="">Kode Skema : {{ $skema->kode_skema }}</p>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            @if ($skema->asesor->image)
                            <img src="{{ asset($skema->asesor->image) }}" alt="" class="u-image u-image-circle u-image-1" src=""
                            data-image-width="500" data-image-height="500" data-animation-name="flipIn"
                            data-animation-duration="1000" data-animation-direction="X">
                            @else
                            <img src="" alt="" class="u-image u-image-circle u-image-1" src=""
                            data-image-width="500" data-image-height="500" data-animation-name="flipIn"
                            data-animation-duration="1000" data-animation-direction="X">
                            @endif
                            <h5 class="u-text u-text-3" data-animation-name="customAnimationIn"
                                data-animation-duration="1000">
                                {{ $skema->asesor->nama }}
                            </h5>
                            <p class="u-text u-text-4" data-animation-name="customAnimationIn"
                                data-animation-duration="1000">Penanggung Jawab
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-col" style="">
                        <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                            src="" data-animation-name="flipIn" data-animation-duration="1000"
                            data-animation-direction="X">
                            <div class="u-container-layout u-valign-bottom u-container-layout-2" src="">
                                @if ($skema->tuk->image)
                                <img class="u-expanded-width u-image u-image-2" src="{{ asset($skema->tuk->image) }}" data-image-width="1080"
                                data-image-height="1080">
                                @else
                                <img class="u-expanded-width u-image u-image-2" src="{{ asset('images/back/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg') }}" data-image-width="1080"
                                data-image-height="1080">
                                @endif
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-size-xs-60 u-layout-cell-2"
                            src="">
                            <div
                                class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-3">
                                <p class="u-text u-text-5" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">{{ $skema->tuk->tuk }}</p>
                                <p class="u-text u-text-6" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">TUK
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-68bd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-heading-font u-text u-text-1" >List Unit Kompetensi</h1>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <colgroup>
                        <col width="6.2%">
                        <col width="22.3%">
                        <col width="71.5%">
                    </colgroup>
                    <thead class="u-custom-color-2 u-table-header u-table-header-1">
                        <tr style="height: 42px;">
                            <th class="u-table-cell">No</th>
                            <th class="u-table-cell">Kode Unit</th>
                            <th class="u-table-cell">Unit Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody class="u-table-body u-white u-table-body-1">
                        @foreach ($skema->unikoms as $asu)
                        <tr style="height: 32px;">
                            <td class="u-border-2 u-border-grey-70 u-border-no-left u-border-no-right u-table-cell">
                                {{ $loop->iteration }}</td>
                            <td class="u-border-2 u-border-grey-70 u-border-no-left u-border-no-right u-table-cell">
                                {{ $asu->kode_unikom }}
                            </td>
                            <td class="u-border-2 u-border-grey-70 u-border-no-left u-border-no-right u-table-cell">
                                {{ $asu->unikom }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
