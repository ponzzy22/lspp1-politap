@extends('layout/asesi2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-user"></i> Welcome, {{ Auth::user()->name }}
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-info">
                {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div><br>
    {{-- <-------------------- PROFIL --------------------> --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="d-flex flex-row">
                        <img src="{{ asset(Auth::user()->image) }}" class="img-lg rounded" alt="image">
                        <div class="ml-3">
                            <h6 class="text-primary">{{ Auth::user()->name }}</h6>
                            <p class="text-muted"><i class="fas fa-envelope"></i> {{ Auth::user()->email2 }}</p>
                            <p class="text-muted">NIM :
                                {{ Auth::user()->email }}</p>
                            <p class="text-muted">Mahasiswa Politeknik Negeri Ketapang</p>
                            <p class="mt-2 text-muted font-weight-bold">{{ Auth::user()->jurusan->jurusan }}</p>
                            <a href="{{ route('koleksi.sertifikat') }}"><p class="text text-black"> <i class="fas fa-certificate text-muted"></i> Koleksi Sertifikat: {{ $datasertifikat }}
                            </p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <-------------------- LENGKAPI DATA PENDAFTARAN --------------------> --}}
        @foreach ($datareg as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a style="padding-left: 0%" href="{{ route('registrasi.show', $asu->id) }}"><button
                                class="btn btn-success btn-rounded btn-sm">
                                <i class="fas fa-play-circle"></i> Lanjutkan Pengisian Data Pendaftaran Anda </button></a>
                        {{-- <a href="{{ route('formulirapl2edit', $asu->id) }}"><button
                                class="btn btn-success btn-rounded btn-sm"><i class="fas fa-upload"></i>
                                Upload Data Formulir APL-02</button></a> --}}
                        {{-- <button type="button" class="btn btn-info btn-sm btn-rounded" data-toggle="modal"
                            data-target="#exampleModal-{{ $asu->id }}"><i class="fas fa-flag-checkered"></i> Kirim Data Pendaftaran </button> --}}
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-trash "></i> Hapus
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan:</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- MENUNGGU VALIDASI --------------------> --}}
        @foreach ($datareg1 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('rekap_pendaftaran', $asu->id) }}"><button
                                class="btn btn-info btn-rounded btn-sm"><i class="fa fa-book "></i> Rekap Pendaftaran
                            </button></a>
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-eraser "></i> Batalkan Pendaftaran
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan: </small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- PENDAFTARAN DITOLAK --------------------> --}}
        @foreach ($datareg3 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a style="padding-left: 0%" href="{{ route('data_edit_tolak', $asu->id) }}"><button
                                class="btn btn-success btn-rounded btn-sm">
                                <i class="fas fa-edit"></i> Perbaiki Data Formulir APL-01 </button></a>
                        <div class="btn btn-warning btn-rounded btn-sm" data-toggle="modal"
                            data-target="#exampleModal2-{{ $asu->id }}"><i class="fa fa-info-circle "></i> Info
                        </div>
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-trash "></i> Hapus
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan: {!! $asu->keterangan !!}</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- BERHASIL DIVALIDASI --------------------> --}}
        @foreach ($datareg2 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('rekap_pendaftaran', $asu->id) }}"><button
                                class="btn btn-info btn-rounded btn-sm"><i class="fa fa-book "></i> Rekap Pendaftaran
                            </button></a>
                        <a href="{{ route('info_sertifikasi', $asu->id) }}"><button
                                class="btn btn-warning btn-rounded btn-sm"><i class="fa fa-info-circle "></i> Informasi
                                Sertifikasi
                            </button></a>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-circle-notch text-muted"></i>
                                    <small class=" ml-1 mb-0">Skema dalam proses sertifikasi</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- SERTIFIKAT --------------------> --}}
        {{-- @foreach ($datareg4 as $asu)
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img src="../images/faces/face11.html" class="img-lg rounded" alt="profile image">
                        <div class="ml-3">
                            <h6>Maria</h6>
                            <p class="text-muted">maria@gmail.com</p>
                            <p class="mt-2 text-primary font-weight-bold">{{ $asu->skema_name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach --}}
    </div><br>

    {{-- <-------------------- TABEL SKEMA --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fab fa-pagelines"></i>Tabel Skema</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-info text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 100.141px;">Kode Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Lihat</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Mendaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="">{{ $asu->kode_skema }}</td>
                                                    <td>{{ $asu->skema }}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('info_skema.show', $asu->id) }}"><button
                                                                type="submit" class="btn btn-info btn-sm btn-block"><i
                                                                    class="fa fa-eye "></i> Lihat
                                                                Skema</button></a>
                                                    </td>
                                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#exampleModal-{{ $asu->id }}"><i
                                                                class="fas  fa-check-square"></i> Mendaftar</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL HAPUS LENGKAPI DATA ---------------> --}}
    @foreach ($datareg as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL HAPUS Menunggu Validasi... ---------------> --}}
    @foreach ($datareg1 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL HAPUS Pendaftaran Ditolak... ---------------> --}}
    @foreach ($datareg3 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <--------------- MODAL KIRIM DATA ---------------> --}}
    @foreach ($datareg as $data)
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('registrasi.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Kirim Data Pendaftaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Setelah mengirim data pendaftaran , maka data pendaftaran tidak dapat diedit kembali</p>
                            <p>Apakah anda yakin ingin akan mengirim data pendaftaran ini ke Admin LSP-POLITAP?</p>
                            <input type="hidden" name="skema_id"
                                value="{{ $data->kode_skema }}{{ $data->user_id }}">
                            <input type="hidden" name="status" value="<h4 style='color: green'>Menunggu Validasi...</h4>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-block font-weight-bold">Kirim Data Pendaftaran
                                <i class="fas fa-flag-checkered"></i></button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <--------------- MODAL INFO ---------------> --}}
    @foreach ($datareg3 as $data)
        <div class="modal fade" id="exampleModal2-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Info dari Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $data->keterangan !!}
                    </div>
                    <div class="modal-footer">
                        <i class="fas fa-flag-checkered"></i></button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <--------------- MODAL KONFIRMASI PENDAFTARAN ---------------> --}}
    @foreach ($skema as $asu)
        <div class="modal fade" id="exampleModal-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fab fa-pagelines"></i> {{ $asu->skema }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data"
                            class="form-sample">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}{{ $asu->id }}">
                            <input type="hidden" name="kode" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="id_skema" value="{{ $asu->id }}">
                            <input type="hidden" name="skema_name" value="{{ $asu->skema }}">
                            <input type="hidden" name="skema_id" value="{{ $asu->kode_skema }}{{ Auth::user()->id }}">
                            <input type="hidden" name="kode_skema" value="{{ $asu->kode_skema }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="status"
                                value="<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>">
                            <input type="hidden" name="tuk_id" value="1">
                            <input type="hidden" name="asesor_id" value="1">
                            <input type="hidden" name="image" value="{{ Auth::user()->image }}">
                            {{-- <--------------- DATA PRIBADI ---------------> --}}
                            <input type="hidden" class="form-control" name="user_name"
                                value="{{ old('name', Auth::user()->name) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="nim"
                                value="{{ old('email', Auth::user()->email) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="nim"
                                value="{{ old('email', Auth::user()->email) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="sex_id"
                                value="{{ old('email', Auth::user()->sex_id) }}">
                            <input type="hidden" class="form-control" name="tgl_lahir"
                                value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                            <input type="hidden" class="form-control" name="tmpt_lahir"
                                value="{{ old('tmpt_lahir', Auth::user()->tmpt_lahir) }}">
                            <input type="hidden" class="form-control" name="surel"
                                value="{{ old('surel', Auth::user()->surel) }}">
                            <input type="hidden" class="form-control" name="no_hp"
                                value="{{ old('no_hp', Auth::user()->no_hp) }}">
                            <input type="hidden" class="form-control" name="jurusan_id"
                                value="{{ old('jurusan_id', Auth::user()->jurusan_id) }}">
                            <input type="hidden" class="form-control" name="semester_id"
                                value="{{ old('semester_id', Auth::user()->semester_id) }}">
                            <input type="hidden" class="form-control" name="alamat"
                                value="{{ old('alamat', Auth::user()->alamat) }}">
                            <input type="hidden" class="form-control" name="negara"
                                value="{{ Auth::user()->negara }}">
                            <p>1. Silahkan pilih <span class="text text-success">
                                    Konfirmasi Pendaftaran</span>
                            </p>
                            <p>
                                2. Setelah konfirmasi berhasil, kemudian <span class="text text-info">
                                    Ambil Formulir Pendaftaran</span> dibawah ini
                            </p>

                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Konfirmasi Pendaftaran</button>
                            <br>
                        </form>
                        <a href="{{ route('registrasi.edit', $asu->id) }}"><button
                                class="btn btn-info btn-block font-weight-bold"><i class="fa fa-window-restore"></i>
                                Ambil Formulir Pendaftaran </button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
