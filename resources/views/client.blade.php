@extends('layout/client')
@section('judul')
    LSP P1 - POLITAP | Lembaga Sertifikasi Profesi Pihak Ke Satu Politeknik Negeri Ketapang
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/client/css/Home.css') }}" media="screen">
@endsection
@section('isi')
    {{-- <---------------------- CAROUSEL ----------------------> --}}

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('public/assets/images/carousel/lsp.jpg') }}" alt="Los Angeles" style="width:100%;">
            </div>

            @foreach ($carousel as $asu)
                <div class="item">
                    <img src="{{ $asu->image }}" alt="Carousel" style="width:100%;">
                </div>
            @endforeach


        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





    {{-- <---------------------- PROFIL LSP ----------------------> --}}

    <section
        class="u-align-center u-clearfix u-gradient u-hidden-md u-hidden-sm u-hidden-xs u-valign-middle-sm u-valign-middle-xs u-section-2"
        id="carousel_de65">
        <h1 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
            <span class="u-file-icon u-icon u-icon-1"><img src="{{ asset('public/images/logo/88945.png') }}"
                    alt=""></span>&nbsp; Profil&nbsp; LSP - POLITAP
            <br>
        </h1>
        <div data-animation-name="customAnimationIn"
        data-animation-duration="1000" class="u-tab-links-align-justify u-tabs u-tabs-1">
            <ul class="u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a class="active u-active-white u-button-style u-custom-color-1 u-hover-black u-radius-11 u-tab-link u-text-active-black u-tab-link-1"
                        id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5"
                        aria-selected="true">PROFIL</a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-white u-button-style u-custom-color-1 u-hover-black u-radius-11 u-tab-link u-text-active-black u-tab-link-2"
                        id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7"
                        aria-selected="false">VISI</a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-white u-button-style u-custom-color-1 u-hover-black u-radius-11 u-tab-link u-text-active-black u-tab-link-3"
                        id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917"
                        aria-selected="false">MISI</a>
                </li>
                <li class="u-tab-item u-tab-item-4" role="presentation">
                    <a class="u-active-white u-button-style u-custom-color-1 u-hover-black u-radius-11 u-tab-link u-text-active-black u-tab-link-4"
                        id="tab-7fce" href="#link-tab-7fce" role="tab" aria-controls="link-tab-7fce"
                        aria-selected="false">MOTTO</a>
                </li>
            </ul>
            @foreach ($profil as $asu)
                <div class="u-tab-content">
                    <div class="u-container-style u-grey-5 u-tab-active u-tab-pane u-tab-pane-1" id="tab-0da5"
                        role="tabpanel" aria-labelledby="link-tab-0da5">
                        <div class="u-container-layout u-container-layout-1">
                            <ul class="u-text u-text-2" data-animation-name="customAnimationIn"
                                data-animation-duration="1000">
                                <p>{!! $asu->profil !!}
                                </p>
                            </ul>
                            <img class="u-image u-image-default u-preserve-proportions u-image-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1000"
                                src="{{ $asu->image }}" alt="" data-image-width="1620" data-image-height="1080">
                        </div>
                    </div>
                    <div class="u-container-style u-grey-5 u-tab-pane u-tab-pane-2" id="tab-14b7" role="tabpanel"
                        aria-labelledby="link-tab-14b7">
                        <div class="u-container-layout u-container-layout-2">
                            <p class="u-text u-text-3">{!! $asu->visi !!}</p>
                        </div>
                    </div>
                    <div class="u-container-style u-grey-5 u-tab-pane u-tab-pane-3" id="tab-2917" role="tabpanel"
                        aria-labelledby="link-tab-2917">
                        <div class="u-container-layout u-container-layout-3">
                            <p class="u-text u-text-4">{!! $asu->misi !!}</p>
                        </div>
                    </div>
                    <div class="u-container-style u-grey-5 u-tab-pane u-tab-pane-4" id="link-tab-7fce" role="tabpanel"
                        aria-labelledby="tab-7fce">
                        <div class="u-container-layout u-container-layout-4">
                            <p class="u-text u-text-5">{!! $asu->motto !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="u-clearfix u-custom-color-3 u-section-3" id="carousel_47cb">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-26-lg u-size-28-xl u-size-29-md u-size-29-sm u-size-29-xs u-layout-cell-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div
                                class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-1">
                                <h1 class="u-custom-font u-font-lato u-text u-text-1">Can't make it in-person? Join Us
                                    Online<br>
                                </h1>
                                <a href="https://nicepage.com/c/medicine-science-html-templates"
                                    class="u-active-white u-align-center u-border-none u-btn u-button-style u-custom-color-1 u-hover-white u-btn-1"><span
                                        class="u-icon"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px"
                                            y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="m19.98,200.65909l180.67121,0l55.82879,-171.63684l55.82883,171.63684l180.67118,0l-146.16581,106.07619l55.83168,171.63684l-146.16587,-106.07908l-146.16584,106.07908l55.8317,-171.63684l-146.16586,-106.07619z">
                                            </path>
                                        </svg><img></span>&nbsp;Church Online
                                </a>
                            </div>
                        </div>
                        <img src="{{ asset('public/images/back/2.jpg') }}" class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-31-md u-size-31-sm u-size-31-xs u-size-32-xl u-size-34-lg u-image-1"
                            data-image-width="1280" data-image-height="720" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <---------------------- BERITA ----------------------> --}}

    <section class="u-align-center u-clearfix u-gradient u-section-3" id="carousel_aa74">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-direction=""><span class="u-file-icon u-icon"><img
                        src="images/3627699.png" alt=""></span>&nbsp; BERITA SEPUTAR LSP - POLITAP<br>
            </h1>
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($artikel as $asu)
                        <div
                            class="u-align-center u-container-style u-custom-color-1 u-custom-item u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
                            <div
                                class="u-container-layout u-similar-container u-valign-bottom-xl u-valign-top-sm u-container-layout-1">
                                <img alt=""
                                    class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-hover-feature u-image u-image-default u-image-1"
                                    data-image-width="920" data-image-height="920" src="{{ $asu->image }}"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="X">
                                <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-2"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    {{ $asu->title }}</h3>
                                <p class="u-text u-text-3" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">{!! $asu->excerpt !!}</p>
                                <a href="{{ route('berita_detail', $asu->id) }}"
                                    class="u-border-2 u-btn u-button-style u-grey-90 u-text-hover-palette-1-base u-btn-1"
                                    data-animation-name="flipIn" data-animation-duration="1000"
                                    data-animation-direction="X">LIHAT DETAIL&nbsp; &nbsp;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-3"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-4"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    {{-- <---------------------- PENGELOLA ----------------------> --}}

    <section class="u-align-center u-clearfix u-gradient u-section-4" id="carousel_02fc">
        <div class="u-expanded-width u-grey-90 u-shape u-shape-rectangle u-shape-1"></div>
        <h2 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-default u-text-1"
            data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                class="u-file-icon u-icon u-text-white"><img src="{{ asset('public/images/logo/18.png') }}"
                    alt=""></span>&nbsp;&nbsp;PENGELOLA
            LSP - POLITAP
        </h2>
        <div class="u-layout-horizontal u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach ($karyawan as $asu)
                    <div class="u-align-center u-container-style u-grey-90 u-list-item u-repeater-item u-list-item-1">
                        <div
                            class="u-container-layout u-similar-container u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                            <img alt=""
                                class="u-border-2 u-expanded-width-lg u-hover-feature u-image u-image-default u-image-1"
                                data-image-width="404" data-image-height="404" src="{{ $asu->image }}"
                                data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X">
                            <h3 class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn"
                                data-animation-duration="1000">{{ $asu->nama }}</h3>
                            <p class="u-align-center u-text u-text-palette-3-base u-text-3"
                                data-animation-name="customAnimationIn" data-animation-duration="1000">
                                {{ $asu->keterangan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                        c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                        c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                    </svg>
                </span>
            </a>
        </div>






    </section>

    {{-- <---------------------- PETA ----------------------> --}}

    <section class="u-clearfix u-gradient u-section-5" id="sec-60c2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0"><span class="u-file-icon u-icon"><img
                        src="{{ asset('public/images/logo/592245.png') }}" alt=""></span>&nbsp;&nbsp;PETA LOKASI LSP -
                POLITAP
            </h1>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <div class="u-expanded u-grey-10 u-map u-map-1" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-direction="">
                                    <div class="embed-responsive">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.250339779255!2d109.988631!3d-1.8168375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1650546915934!5m2!1sid!2sid"
                                            data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE0ITFtOCExbTMhMWQxNTk1MS4yNTAzMzk3NzkyNTUhMmQxMDkuOTg4NjMxITNkLTEuODE2ODM3NSEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgwJTI1M0EweGUwNWVlNjVlMzYyN2JhNmMhMnNQb2xpdGVrbmlrJTI1MjBOZWdlcmklMjUyMEtldGFwYW5nITVlMCEzbTIhMXNpZCEyc2lkITR2MTY1MDU0NjkxNTkzNCE1bTIhMXNpZCEyc2lkJTIyJTJDJTIyem9vbSUyMiUzQW51bGwlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEITFtMTQhMW04ITFtMyExZDE1OTUxLjI1MDMzOTc3OTI1NSEyZDEwOS45ODg2MzEhM2QtMS44MTY4Mzc1ITNtMiExaTEwMjQhMmk3NjghNGYxMy4xITNtMyExbTIhMXMweDAlMjUzQTB4ZTA1ZWU2NWUzNjI3YmE2YyEyc1BvbGl0ZWtuaWslMjUyME5lZ2VyaSUyNTIwS2V0YXBhbmchNWUwITNtMiExc2lkITJzaWQhNHYxNjUwNTQ2OTE1OTM0ITVtMiExc2lkITJzaWQlMjIlN0Q="></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                            <div
                                class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                                <img class="u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ asset('public/images/logo/IMG_20220420_131245.jpg') }}" alt=""
                                    data-image-width="4160" data-image-height="2352" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                <h2 class="u-align-center u-custom-font u-font-merriweather u-text u-text-2"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction=""> Lembaga Sertifikasi Profesi Politap Negeri Ketapang
                                </h2>
                                <p class="u-custom-font u-font-merriweather u-text u-text-black u-text-3"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    <span style="font-weight: 700;">Alamat </span>:<br>Gedung Kuliah POLITAP Lantai 1
                                    ,<br>Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang,
                                    Kalimantan Barat 78112
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
                                </p>
                                <p class="u-custom-font u-font-merriweather u-text u-text-4"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">Kontak Admin
                                    LSP - POLITAP :</p>
                                <p class="u-text u-text-5" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000"><span class="u-file-icon u-icon"><img
                                            src="{{ asset('public/images/logo/1384023.png') }}" alt=""></span>&nbsp;<i>
                                        08965386474683</i>
                                </p>
                                <p class="u-text u-text-6" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000"><span class="u-file-icon u-icon"><img
                                            src="{{ asset('public/images/logo/561127.png') }}" alt=""></span>
                                    &nbsp;<i>lsp@politap.ac.id</i>
                                </p>
                                <p class="u-text u-text-7" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                                        href="https://www.instagram.com/lsppolitap/" target="_blank"><span
                                            class="u-file-icon u-icon"><img
                                                src="{{ asset('public/images/logo/1384031.png') }}" alt=""></span>&nbsp;
                                        LSPPOLITAP
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <---------------------- LEMBAGA YANG TERTAUT ----------------------> --}}

    <section class="u-align-center u-clearfix u-hidden-sm u-hidden-xs u-white u-section-6" id="sec-eb3e">
        <h1 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000"
            data-animation-delay="0"><span class="u-file-icon u-icon"><img
                    src="{{ asset('public/images/logo/58061.png') }}" alt=""></span>&nbsp;&nbsp;LEMBAGA YANG TERTAUT<br>
        </h1>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-1">
                        <span class="u-file-icon u-icon u-icon-2" data-href="https://bnsp.go.id/" data-target="_blank"
                            data-animation-name="customAnimationIn" data-animation-duration="1000"
                            data-animation-direction=""><img src="{{ asset('public/images/logo/bnsp.png') }}"
                                alt=""></span>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-2">
                        <span class="u-file-icon u-icon u-icon-3" data-href="https://www.kemdikbud.go.id/"
                            data-target="_blank" data-animation-name="customAnimationIn" data-animation-duration="1000"
                            data-animation-direction=""><img src="{{ asset('public/images/logo/kemendikbud.png') }}"
                                alt=""></span>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-3">
                        <span class="u-file-icon u-icon u-icon-4" data-href="https://politap.ac.id/" data-target="_blank"
                            data-animation-name="customAnimationIn" data-animation-duration="1000"
                            data-animation-direction=""><img src="{{ asset('public/images/logo/politap.png') }}"
                                alt=""></span>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-valign-bottom-md u-valign-middle-xl u-container-layout-4">
                        <span class="u-file-icon u-icon u-icon-5" data-href="{{ route('/') }}"
                            data-animation-name="customAnimationIn" data-animation-duration="1000"
                            data-animation-direction=""><img src="{{ asset('public/images/logo/lsp.png') }}"
                                alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
