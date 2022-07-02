@extends('layout.client')
@section('judul')
    Skema | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
<<<<<<< HEAD
    <style>
        .hm-gradient {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
        }

        .darken-grey-text {
            color: #2E2E2E;
        }

        .input-group.md-form.form-sm.form-2 input {
            border: 1px solid #bdbdbd;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .input-group.md-form.form-sm.form-2 input.purple-border {
            border: 1px solid #9e9e9e;
        }

        .input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
            border: 1px solid #ba68c8;
            box-shadow: none;
        }

        .form-2 .input-group-addon {
            border: 1px solid #ba68c8;
        }

        .danger-text {
            color: #ff3547;
        }

        .success-text {
            color: #00C851;
        }

        .table-bordered.red-border,
        .table-bordered.red-border th,
        .table-bordered.red-border td {
            border: 1px solid #ff3547 !important;
        }

        .table.table-bordered th {
            text-align: center;
        }
    </style>
=======
    <link rel="stylesheet" href="{{ asset('client/Skema.css') }}" media="screen">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection

@section('isi')
<<<<<<< HEAD
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Skema </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
=======
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-9790">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/logo3/11.png') }}"
                                            alt=""></span>&nbsp;Daftar Skema
                                </h1>
                                <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="">
                                </div>
                            </div>
                        </div>
                    </div>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

<<<<<<< HEAD
    <br><br>
    <!-- ***** Koten ***** -->

    <body class="hm-gradient">
        <main>
            <div class="container mt-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="mdb-color darken-3">
                                <tr style="background-color: #c20303c5" class="text-white">
                                    <th>#</th>
                                    <th>Kode Skema</th>
                                    <th>Nama Skema</th>
                                    <th>Lihat Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skema as $asu)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $asu->kode_skema }}</td>
                                        <td>{{ $asu->skema }}</td>
                                        <td><a href="{{ route('skema_detail', Crypt::encryptString($asu->id)) }}"
                                                class="btn btn-info"><i class="fa fa-search"></i> Lihat</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
=======

    <section class="u-clearfix u-grey-5 u-section-2" src="" id="sec-83b6">
        @foreach ($banner as $asu)
            <img src="{{ $asu->image }}" width="75%" alt="">
        @endforeach
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="5.5%">
                        <col width="17.6%">
                        <col width="49.8%">
                        <col width="7.1%">
                        <col width="20%">
                    </colgroup>
                    <thead class="u-align-left u-custom-color-1 u-custom-font u-table-header u-text-font u-table-header-1">
                        <tr style="height: 28px;">
                            <th class="u-table-cell">No</th>
                            <th class="u-table-cell">Kode Skema</th>
                            <th class="u-table-cell">Skema</th>
                            <th class="u-table-cell">Detail</th>
                            <th class="u-table-cell">Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-font u-font-ubuntu u-table-body u-text-black u-white u-table-body-1">
                        @foreach ($skema as $asu)
                            <tr style="height: 45px;">
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    {{ $asu->kode_skema }}
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    {{ $asu->skema }}:
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    <a href="{{ route('skema_detail', $asu->id) }}"><button class="btn btn-info"><i
                                                class="fas fa-eye"></i></button></a>
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    {{ $asu->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
            </div>
        </main>
    </body>
    <!-- ***** Akhir Konten ***** -->
@endsection
