@extends('layout/client')
@section('judul')
    Formulir Pendaftaran | LSP POLITAP
@endsection
<<<<<<< HEAD

@section('download')
    active
@endsection

@section('css')
    <style>
        @charset "UTF-8";

        [data-toggle=collapse] i:before {
            content: "";
        }

        [data-toggle=collapse].collapsed i:before {
            content: "";
        }

        #accordion .card-header {
            margin-bottom: 8px;
        }

        #accordion .accordion-title {
            position: relative;
            display: block;
            padding: 8px 0 8px 50px;
            background: #213744;
            border-radius: 8px;
            overflow: hidden;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            width: 100%;
            text-align: left;
            transition: all 0.4s ease-in-out;
        }

        #accordion .accordion-title i {
            position: absolute;
            width: 40px;
            height: 100%;
            left: 0;
            top: 0;
            color: #fff;
            background: radial-gradient(rgba(33, 55, 68, 0.8), #213744);
            text-align: center;
            border-right: 1px solid transparent;
        }

        #accordion .accordion-title:hover {
            padding-left: 60px;
            background: #213744;
            color: #fff;
        }

        #accordion .accordion-title:hover i {
            border-right: 1px solid #fff;
        }

        #accordion .accordion-body {
            padding: 40px 55px;
        }

        #accordion .accordion-body ul {
            list-style: none;
            margin-left: 0;
            padding-left: 0;
        }

        #accordion .accordion-body li {
            padding-left: 1.2rem;
            text-indent: -1.2rem;
        }

        #accordion .accordion-body li:before {
            content: "";
            padding-right: 5px;
            font-family: "Flaticon";
            font-size: 16px;
            font-style: normal;
            color: #213744;
        }
    </style>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-file-alt"></i> Formulir Pendaftaran (Formulir APL-01 & APL-02)</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <div class="container">
        <div id="accordion" class="py-5">
            @foreach ($file as $asu)
                @if ($asu->file)
                <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="card-header p-0 border-0" id="heading-240">
                        <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse"
                            data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i
                                class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>
                            {{ $asu->file }}</button>
                    </div>
                    <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
                        <div class="card-body accordion-body">
                            <embed src="{{ asset($asu->image) }}" width="100%" type="application/pdf">
                        </div>
                    </div>
                </div>
                @else
                <h2>DATA KOSONG</h2>
                @endif
            @endforeach
        </div>
    </div>
=======
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
                                            alt=""></span>&nbsp;Formulir APL-02
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
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
