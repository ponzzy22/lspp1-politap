@extends('layout/asesi2')
@section('isi')
    @include('layout/verifikasi')
    {{-- <--------------- Mengisi Data Formulir APL-01 ---------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas  fa-check-square"></i> Mengisi Data Formulir APL-01
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Mengambil Formulir</a></li>
                <li class="breadcrumb-item active" aria-current="page">Formulir APL-01</li>
            </ol>
        </nav>
    </div><br>
    {{-- <-------------------- UPLOAD DOKUMEN --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fab fa-pagelines"></i>{{ $data->skema_id }} <i
                    class="fas  fa-ellipsis-h"></i> {{ $data->skema_name }}
            </h4>
            <h4 class="card-title"><i class="fas fa-user"></i>{{ Auth::User()->name }}</h4>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <button style="align-items: center" type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#exampleModal-1">
                        <i class="fas fa-question-circle"></i> Instruksi Pengisian Formulir APL-01
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-upload"></i> Upload Dokumen Pendukung</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 700%">Nama Data</th>
                                        <th style="width: 20%">Action</th>
                                        <th style="width: 20%">Status</th>
                                    </tr>
                                </thead>
                                @foreach ($identitas as $data)
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                            <td class="font-weight-bold">{{ $data->name }}</td>
                                            <td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal-{{ $data->id }}"><i
                                                        class="fas fa-cloud-upload-alt"></i> Upload Dokumen</button></td>
                                            <td>
                                                {!! $data->status !!}
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br>

    {{-- <-------------------- UPLOAD DATA PRIBADI --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-user-circle"></i> Lengkapi Data Profile Anda </h4>
            <form action="{{ route('formulirapl2.update') }}" method="POST" enctype="multipart/form-data"
                class="form-sample">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name"
                                    value="{{ old('name', Auth::user()->name) }}">
                                @error('name')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                            <div class="col-sm-9">
                                <input readonly type="number" maxlength="25" class="form-control" name="email"
                                    value="{{ old('email', Auth::user()->email) }}">
                                @error('email')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sex_id">
                                    <option value="" holder></option>
                                    @foreach ($sex as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('sex_id', Auth::user()->sex_id) == $result->id) selected @endif>{{ $result->sex }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="valuelahir"
                                    value="{{ Auth::user()->tempat_lahir }}">
                                @error('valuelahir')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" name="valuesurel"
                                        value="{{ Auth::user()->email2 }}">
                                </div>
                                @error('valuesurel')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</i></span>
                                    <input type="number" class="form-control" name="no_hp"
                                        value="{{ old('no_hp', Auth::user()->no_hp) }}">
                                </div>
                                @error('no_hp')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jurusan_id">
                                    <option value="" holder></option>
                                    @foreach ($jurusan as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('jurusan_id', Auth::user()->jurusan_id) == $result->id) selected @endif>{{ $result->jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="semester_id">
                                    <option value="" holder></option>
                                    @foreach ($semester as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('semester_id', Auth::user()->semester_id) == $result->id) selected @endif>{{ $result->semester }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Warga Negara</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="20" class="form-control" name="negara"
                                    value="{{ old('negara', Auth::user()->negara) }}">
                                @error('negara')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Sesuai KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat"
                                    value="{{ old('alamat', Auth::user()->alamat) }}">
                                @error('alamat')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan Data
                    Anda</button><br><br>
            </form>
            {{-- @foreach ($datareg as $item)
                <a href="{{ route('formulirapl2edit', $item->id) }}"><button type="submit"
                        class="btn btn-success btn-block btn-rounded font-weight-bold">Selanjutnya
                        <i class="fas fa-angle-double-right"></i></button></a>
            @endforeach --}}
        </div>
    </div><br><br>

    {{-- <--------------- MODAL INSTRUKSI ---------------> --}}
    <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Instruksi Pengisian Formulir APL-01</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Langkah-langkah pengisian formulir APL-01 :
                    <br><br>
                    <p>1. Upload data file dokumen pendukung, file berupa <span style="color: brown">png/pdf</span>.</p>
                    <p>2. Setelah Upload berhasil keterangan Statusnya menjadi <span style="color: green">Ada</span>. </p>
                    <p>3. Pastikan semua data pada Upload Dokumen Pendukung harus terisi. </p>
                    <p>4. Lengkapi dan isi data profil anda. </p>
                    <p>5. Klik tombol <span style="color: blue"> Simpan</span> data pada paling bawah halaman </p>
                    <p>5. Kemudian Klik Tombol <span style="color: green"> Selanjutnya</span> data pada paling bawah halaman
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL UPDATE ---------------> --}}
    @foreach ($identitas as $data)
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('identitas.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">{{ $data->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="status"
                                value="<label class='badge badge-outline-success badge-pill'>Ada</label>">
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-warning badge-pill'>Belum Dikoreksi</label>">
                            <input type="file" name="image" accept=".png" id="">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Simpan Dokumen</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach



    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-check-square"></i> Formulir APL-02 <i
                            class="fas fa-ellipsis-h"></i>{{ $data->skema_name }}</h4>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <button style="align-items: center" type="button" class="btn btn-warning btn-sm"
                                data-toggle="modal" data-target="#exampleModal-1">
                                <i class="fas fa-question-circle"></i> Instruksi Pengisian Formulir APL-02
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 200px">Unit</th>
                                    <th style="width: 900px">Elemen</th>
                                    <th style="width: 10px">Action</th>
                                    <th style="width: 10px">Status</th>
                                </tr>
                            </thead>
                            {{-- <form action="{{ route('pendaftaran.update', $skema->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('put') --}}
                                @forelse ($xnxx as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->unikom_kode }}</td>
                                            <td>{{ $data->asesmen_name }}</td>
                                            <td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal-{{ $data->id }}"><i
                                                        class="fas fa-cloud-upload-alt"></i> Upload Bukti</button></td>
                                            <td>
                                                {!! $data->status !!}
                                            </td>
                                        </tr>
                                    </tbody>
                                @empty
                                @endforelse
                            {{-- </form> --}}
                        </table><br><br>
                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal-123"
        data-whatever="@mdo"><i class="fas fa-pause-circle"></i> Lanjutkan Nanti </button><br><br>
                        <button type="button" class="btn btn-success btn-block btn-rounded font-weight-bold" data-toggle="modal" data-target="#exampleModal-12"
        data-whatever="@mdo"><i class="fas fa-flag-checkered"></i> Kirim Data Pendaftaran </button>
                    </div>
                </div>
            </div>

        </div>

        {{-- <--------------- MODAL UPLOAD DATA ---------------> --}}
        @foreach ($xnxx as $data)
            <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('pendaftaran.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="modal-header">
                                <h5 style="color: rgb(0, 0, 0)" class="modal-title" id="ModalLabel"><span
                                        class="text text-success">Unit :</span> {{ $data->unikom_name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span class="text text-success" class="font-weight-bold">Elemen :</span> <span
                                    style="color: rgb(0, 0, 0)" class="font-weight-bold">{{ $data->asesmen_name }}</span>
                                <br><br>
                                <div><label class="text text-success" class="font-weight-bold" for="">Kriteria Unjuk
                                        Kerja :</label></div>
                                <span style="color: rgb(0, 0, 0)" class="font-weight-bold">{!! $data->kriteria !!}</span><br><br>
                                <input type="hidden" name="status" value="<label class='badge badge-outline-success badge-pill'>Kompeten</label>">
                                <input type="hidden" name="koreksi" value="<label class='badge badge-outline-warning badge-pill'>Belum Dikoreksi</label>">
                                <input type="file" name="image" accept=".pdf" id="">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success btn-block font-weight-bold"><i
                                        class="fas fa-check-circle"></i>
                                    Simpan Dokumen</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <--------------- MODAL LANJUTKAN NANTI ---------------> --}}
<div class="modal fade" id="exampleModal-123" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Lanjutkan Nanti</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda akan melanjutkan di lain waktu?
            <br><br>
            <p>Tenang saja.. data sebelumnya yang telah anda isi tidak akan hilang</p>
            <p>Anda dapat melanjutkan pengisian data pada halaman Dashboard anda</p>
        </div>
        <div class="modal-footer">
            <a href="{{ route('dashasesi.index') }}"><button type="submit" class="btn btn-success btn-block font-weight-bold">Kembali ke Dashboard </button></a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

    {{-- <--------------- MODAL KIRIM DATA ---------------> --}}
    @foreach ($registrasi as $data)
        <div class="modal fade" id="exampleModal-12" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
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
                        <input type="hidden" name="skema_id" value="belom{{ $data->kode_skema }}{{ $data->user_id }}">
                            <input type="hidden" name="status" value="<h4 style='color: green'>Menunggu Validasi...</h4>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block font-weight-bold">Kirim Data Pendaftaran <i class="fas fa-flag-checkered"></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <--------------- MODAL INSTRUKSI ---------------> --}}
    <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Instruksi Mengisi Formulir APL-02</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Langkah-langkah pengisian formulir APL-02 :
                    <br><br>
                    <p>1. Upload data file Formulir APL-02, file berupa png/pdf.</p>
                    <p>2. File yang diupload datanya harus sesuai dengan elemen yang diperlukan </p>
                    <p>3. Setelah Upload berhasil keterangan Statusnya menjadi "Kompeten". </p>
                    <p>4. Pastikan semua data pada Formulir APL-02 harus Kompeten. </p>
                    <p>5. Klik tombol "Kirim Data Pendaftaran" pada paling bawah halaman </p>
                    <p>6. Setelah menekan tombol tersebut, maka data pendaftaran akan terkirim ke Admin LSP-POLITAP</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
