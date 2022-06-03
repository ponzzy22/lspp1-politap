@extends('layout/admin1')
@section('isi')
    @include('layout/verifikasi')
    <div class="row">
        <!-- /////////////////////////////////// -->
        <!-- SISI KIRI  DATA -->
        <!-- /////////////////////////////////// -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- /////////////////////////////////// -->
                        <!-- SISI KANAN DATA -->
                        <!-- /////////////////////////////////// -->
                        <div class="col-lg-12 pl-lg-5">
                            <button class="btn btn-light text-white">{!! $validasi->status !!}</button>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <div>
                                    <h3>{{ $validasi->user_name }}</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">NIM :
                                            <h4>{{ $validasi->nim }}</h4>
                                        </h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">Kode Registrasi:
                                            <h4>#{{ $validasi->id }}</h4>
                                        </h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">{{ $validasi->kode_skema }}
                                            <h4>{{ $validasi->skema_name }}</h4>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            {{-- <--------------- FORMULIR APL01 ----------------> --}}
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Upload Dokumen Pendukung</h4>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 5px">#</th>
                                                <th style="width: 5px">Status</th>
                                                <th style="width: 1000px">Nama Data</th>
                                                <th style="width: 5px">Koreksi</th>
                                                <th style="width: 10px">Hasil</th>
                                            </tr>
                                        </thead>
                                        @foreach ($validasi->upload_files as $asu)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        {!! $asu->status !!}
                                                    </td>
                                                    <td>{{ $asu->name }}</td>
                                                    <td>
                                                        <button style="align-items: center" type="button"
                                                            class="btn btn-warning  btn-sm" data-toggle="modal"
                                                            data-target="#exampleModal-{{ $asu->id }}">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </td>
                                                    <td>{!! $asu->koreksi !!}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                            </div><br>
                            {{-- <--------------- MODAL FORMULIR APL-01 ---------------> --}}
                            @foreach ($validasi->upload_files as $asu)
                                <div class="modal fade" id="exampleModal-{{ $asu->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>{{ $asu->name }} </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="close">
                                                    <span aria-hidden="true"></span>
                                                </button>
                                                <form action="{{ route('koreksiformulir_update.update', $asu->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="koreksi"
                                                        value="<label class='badge badge-outline-info badge-pill'>Valid</label>">
                                                    <input type="hidden" name="kode" value="0">
                                                    <button class="btn btn-info btn-sm btn-rounded"><i
                                                            class="fas fa-check-circle"></i>Data Valid</button>
                                                </form>
                                                <form action="{{ route('koreksiformulir_update.update', $asu->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="kode" value="2">
                                                    <input type="hidden" name="koreksi"
                                                        value="<label class='badge badge-outline-danger badge-pill'>Tidak Valid</label>">
                                                    <button class="btn btn-danger btn-sm btn-rounded"><i
                                                            class="fas fa-times-circle"></i> Tidak Valid</button>
                                                </form>
                                                <form action="{{ route('koreksiformulir_update.update', $asu->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="kode" value="2">
                                                    <input type="hidden" name="koreksi"
                                                        value="<label class='badge badge-outline-light badge-pill'>Tidak Ada Data</label>">
                                                    <button class="btn btn-danger btn-sm btn-rounded"><i
                                                            class="fas fa-times-circle"></i> Tidak Ada Data</button>
                                                </form>
                                                <a href="{{ asset($asu->image) }}" target="_blank"
                                                    class="btn btn-light btn-sm btn-rounded"><i class="fas fa-download"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-rounded btn-light"
                                                    data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset($asu->image) }}" width="100%" alt="">
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="d-flex mb-3">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            {{-- <--------------- FORMULIR APL02 ----------------> --}}
                            <h4 class="card-title"><i class="far fa-id-card "></i> Formulir APL-02</h4>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 5px">#</th>
                                            <th style="width: 5px">Status</th>
                                            <th style="width: 300px">Unit</th>
                                            <th style="width: 1000px">Elemen</th>
                                            <th style="width: 5px">Koreksi</th>
                                            <th style="width: 10px">Hasil</th>
                                        </tr>
                                    </thead>
                                    @foreach ($validasi->xnxxes as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {!! $data->status !!}
                                                </td>
                                                <td>{{ $data->unikom_name }}</td>
                                                <td>
                                                    {{ $data->asesmen_name }}
                                                </td>
                                                <td>
                                                    <button style="align-items: center" type="button"
                                                        class="btn btn-warning btn-block btn-sm" data-toggle="modal"
                                                        data-target="#exampleModal1-{{ $data->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                                <td>{!! $data->koreksi !!}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="{{ route('validasi.show', $validasi->id) }}"><button class="btn btn-primary btn-block btn-sm font-weight-bold"><i class="fas fa-check-circle"></i> Simpan Hasil Koreksi</button></a> --}}
                </div>
            </div>
        </div>
    </div><br>
    {{-- <--------------- MODAL FORMULIR APL-02 ---------------> --}}
    @foreach ($validasi->xnxxes as $asu)
    <div class="modal fade" id="exampleModal1-{{ $asu->id }}" tabindex="-1"
        role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>{{ $asu->name }} </h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="close">
                        <span aria-hidden="true"></span>
                    </button>
                    <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}"
                        method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="koreksi"
                            value="<label class='badge badge-outline-info badge-pill'>Valid</label>">
                        <input type="hidden" name="kode" value="0">
                        <button class="btn btn-info btn-sm btn-rounded"><i
                                class="fas fa-check-circle"></i>Data Valid</button>
                    </form>
                    <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}"
                        method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="kode" value="1">
                        <input type="hidden" name="koreksi"
                            value="<label class='badge badge-outline-danger badge-pill'>Tidak Valid</label>">
                        <button class="btn btn-danger btn-sm btn-rounded"><i
                                class="fas fa-times-circle"></i> Tidak Valid</button>
                    </form>
                    <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}"
                        method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="kode" value="1">
                        <input type="hidden" name="koreksi"
                            value="<label class='badge badge-outline-light badge-pill'>Tidak Ada Data</label>">
                        <button class="btn btn-danger btn-sm btn-rounded"><i
                                class="fas fa-times-circle"></i> Tidak Ada Data</button>
                    </form>
                    <a href="{{ asset($asu->image) }}" target="_blank"
                        class="btn btn-light btn-sm btn-rounded"><i class="fas fa-download"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-rounded btn-light"
                        data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <embed src="{{ asset($asu->image) }}" width="100%" height="400%" alt="">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
@endforeach

    {{-- <--------------- MODAL FORMULIR APL-02 ---------------> --}}
    {{-- @foreach ($validasi->xnxxes as $asu)
        <div class="modal fade" id="exampleModal1-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>{{ $asu->asesmen_name }} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"></span>
                        </button>

                        <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-info badge-pill'>Valid</label>">
                            <input type="hidden" name="kode" value="0">
                            <button class="btn btn-info btn-sm btn-rounded"><i class="fas fa-check-circle"></i>
                                Data Valid</button>
                        </form>
                        <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="kode" value="1">
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-danger badge-pill'>Tidak Valid</label>">
                            <button class="btn btn-danger btn-sm btn-rounded"><i class="fas fa-times-circle"></i> Tidak
                                Valid</button>
                        </form>
                        <form action="{{ route('koreksiformulirapl2_update', $asu->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="kode" value="1">
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-light badge-pill'>Tidak Ada Data</label>">
                            <button class="btn btn-danger btn-sm btn-rounded"><i class="fas fa-times-circle"></i> Tidak Ada
                                Data</button>
                        </form>
                        <a href="{{ asset($asu->image) }}" target="_blank" class="btn btn-light btn-sm btn-rounded"><i
                                class="fas fa-download"></i>
                        </a>
                        <button type="button" class="btn btn-light btn-sm btn-rounded" data-dismiss="modal"><i
                                class="fas fa-times-circle"></i></button>
                    </div>
                    <div class="modal-body">
                        <embed src="{{ asset($asu->image) }}" type="application/pdf" width="100%" height="800px" alt="">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
    @endforeach --}}
    <!-- /////////////////////////////////// -->
    <!-- VALIDASI DATA -->
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-multi-colored" id="accordion-7" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-7">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7"
                        class="">
                        KONFIRMASI SERTIFIKASI SELESAI
                    </a>
                </h5>
            </div>
            <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7"
                data-parent="#accordion-3" style="">
                <div class="card-body">
                    <form action="{{ route('finish.update', $validasi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="status" value="<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>">
                        <input type="hidden" name="kode" value="-">
                        {{-- <input type="hidden" name="id_skema" value="final"> --}}
                        {{-- <input type="hidden" name="id" value="2022{{ $validasi->user_id }}{{$validasi->id_skema }}"> --}}
                        <input type="hidden" name="skema_id"
                            value="{{ $validasi->kode_skema }}{{ $validasi->user_id }}">
                        <input type="hidden" name="date" value="">
                        <input type="hidden" name="time" value="">
                        <input type="hidden" name="asesor_id" value="1">
                        <input type="hidden" name="tuk_id" value="1">
                        <button type="submit" class="btn btn-light btn-block"><i class="fas fa-check-circle"></i>
                            Mahasiswa Sudah Kompeten di Skema {{ $validasi->skema_name }}</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading-8">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-8" aria-expanded="false"
                        aria-controls="collapse-8">
                        SETUJUI PENDAFTARAN SERTIFIKASI
                    </a>
                </h5>
            </div>
            <div id="collapse-8" class="collapse" role="tabpanel" aria-labelledby="heading-8"
                data-parent="#accordion-3" style="">
                <div class="card-body">
                    <form action="{{ route('validasi.update', $validasi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="status"
                            value="<h4 style='color: rgb(34, 123, 138)'>Pendaftaran Divalidasi</h4>">
                        <li><label for="">Tanggal</label></li>
                        <input type="date" class="form-control" name="date">
                        <li>Waktu</li>
                        <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                            <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                                <input name="time" type="text" class="form-control datetimepicker-input" style="width: 10px"
                                    data-target="#timepicker-example">
                                <div class="input-group-addon input-group-append"><i
                                        class="far fa-clock input-group-text"></i></div>
                            </div>
                        </div>
                        <li>Asesor</li>
                        <select class="form-control" name="asesor_id">
                            <option value="" holder>Pilih Asesor</option>
                            @foreach ($asesor as $result)
                                <option value="{{ $result->id }}">{{ $result->nama }}</option>
                                select
                            @endforeach
                        </select>
                        <li>Tempat Uji Kompetensi</li>
                        <select class="form-control" name="tuk_id">
                            <option value="" holder>Pilih Tempat Uji Kompetensi</option>
                            @foreach ($tuk as $result)
                                <option value="{{ $result->id }}">{{ $result->tuk }}</option>
                                select
                            @endforeach
                        </select>
                        <li>Keterangan Lain</li>
                        <textarea name="keterangan" class="summernote" id="" cols="36" rows="5"></textarea><br>
                        <button type="submit" class="btn btn-dark btn-block"><i class="fas fa-check-double"></i>
                            Setujui Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading-9">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-9" aria-expanded="false"
                        aria-controls="collapse-9">
                        TOLAK PENDAFTARAN SERTIFIKASI
                    </a>
                </h5>
            </div>
            <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9"
                data-parent="#accordion-3">
                <div class="card-body">
                    <form action="{{ route('tolak.update', $validasi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="status"
                            value="<h4 style='color: rgb(141, 7, 7)'>Pendaftaran Ditolak</h4>">
                        <input type="hidden" name="date" value="">
                        <input type="hidden" name="time" value="">
                        <input type="hidden" name="asesor_id" value="1">
                        <input type="hidden" name="tuk_id" value="1">
                        <li>Alasan/Keterangan</li>
                        <textarea name="keterangan" class="summernote" id="" cols="36" rows="5"></textarea><br>
                        <button type="submit" class="btn btn-dark btn-block"><i class="fas fa-times-circle"></i>
                            Tolak Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
