@extends('layout.client')
@section('judul')
    Skema | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
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
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Skema Sertifikasi</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

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
            </div>
        </main>
    </body>
    <!-- ***** Akhir Konten ***** -->
@endsection
