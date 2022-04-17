@extends('layout/4')
@section('isi')
    @include('layout/verifikasi')
    {{-- ////////////////////////////////
////////  HEADER  //////////////
/////////////////////////////// --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-circle"></i> Langkah Ke-3 <i class="fas fa-angle-double-right"></i> Mengisi Assesmen Mandiri /
            Formulir APL-02
        </h4>
    </div><br>
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{-- //////////////////////////////// --}}
                    {{-- ////////  TABLE ASESMEN  ////////////// --}}
                    {{-- /////////////////////////////// --}}
                    <h4 class="card-title"><i class="fas fa-check-square"></i> Asesmen Mandiri / Formulir APL-02</h4>
                    <button style="align-items: center" type="button" class="btn btn-warning btn-sm" data-toggle="popover"
                        title="Perhatian!!"
                        data-content="Wajib mengisi semua Assesmen >> Format file berupa 'PDF/PNG/JPEG' >> Upload file kemudian Klik centang biru(K) / jika tidak ada file klik centang merah(BK) >> Jika upload berhasil akan muncul di 'Status Asesmen'di tabel sebelah kanan.."
                        data-original-title="Popover title" aria-describedby="popover635060">
                        <i class="fas fa-question-circle"></i> Instruksi Pengisian Assesmen Mandiri
                    </button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 100px">Unit </th>
                                    <th style="width: 300px">Mampukah Saya?</th>
                                    <th>Bukti (pdf/png/jpeg)</th>
                                    <th>K</th>
                                    <th>BK </th>
                                </tr>
                            </thead>
                            @foreach ($skema->asesmens as $asu)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $asu->unikom->unikom }}</td>
                                        <td>{{ $asu->asesmen }}</td>
                                        {{-- ////////////  K //////////// --}}
                                        <form action="{{ route('xnxx.store') }}" enctype="multipart/form-data"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="data_register_id"
                                                value="{{ Auth::user()->id }}{{ $skema->id }}">
                                            <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="status" value="Kompeten">
                                            <input type="hidden" name="kode"
                                                value="{{ $loop->iteration }}{{ Auth::user()->id }}">
                                            <input type="hidden" name="skema_id" value="{{ $skema->id }}">
                                            <input type="hidden" name="skema_name" value="{{ $skema->skema }}">
                                            <input type="hidden" name="unikom_name" value="{{ $asu->asesmen }}">
                                            <input type="hidden" name="unikom_id" value="{{ $asu->id }}">
                                            <td><input type="file" name="image" /></td>
                                            <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                        class="fas fa-check"></i></button></td>
                                        </form>
                                        {{-- ////////////  BK //////////// --}}
                                        <form action="{{ route('xnxx.store2') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="data_register_id"
                                                value="{{ Auth::user()->id }}{{ $skema->id }}">
                                            <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="unikom_name" value="{{ $asu->asesmen }}">
                                            <input type="hidden" name="skema_id" value="{{ $skema->id }}">
                                            <input type="hidden" name="kode"
                                                value="{{ $loop->iteration }}{{ Auth::user()->id }}">
                                            <input type="hidden" name="skema_name" value="{{ $skema->skema }}">
                                            <input type="hidden" name="unikom_name" value="{{ $asu->asesmen }}">
                                            <input type="hidden" name="unikom_id" value="{{ $asu->id }}">
                                            <input type="hidden" name="status" value="Tidak Kompeten">
                                            <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                        class="fa  fa-times"></i></button></td>
                                        </form>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{-- //////////////////////////////// --}}
                    {{-- ////////   STATUS ASESMEN  ////////////// --}}
                    {{-- /////////////////////////////// --}}
                    <h4 class="card-title"><i class="fas fa-list"></i> Status Assesmen</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Assesmen</th>
                                </tr>
                            </thead>
                            @foreach ($xnxx as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="badge badge-light">{{ $data->status }}</div>
                                        </td>
                                        <td>{{ $data->unikom_name }}</td>
                                        <td>
                                            <form action="{{ route('xnxx.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" type="submit"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
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
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{-- //////////////////////////////// --}}
                    {{-- ////////  TABLE UPLOAD DOKUMEN  ////////////// --}}
                    {{-- /////////////////////////////// --}}
                    <h4 class="card-title"><i class="fas fa-upload"></i> Upload Dokumen Pendukung</h4>
                    <button style="align-items: center" type="button" class="btn btn-warning btn-sm" data-toggle="popover"
                        title=""
                        data-content="Lengkapi data berikut seperti cara diatas >> Setelahnya klik tombol 'Kirim Data Registrasi'"
                        data-original-title="Popover title" aria-describedby="popover635060">
                        <i class="fas fa-question-circle"></i> Instruksi Upload Dokumen Pendukung
                    </button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 300px">Dokumen Pendukung</th>
                                    <th>Bukti (pdf/png/jpeg)</th>
                                    <th>Ada</th>
                                    <th>Tidak ada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Upload Photo</td>
                                    {{-- ////////  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="name" value="Photo">
                                        <input type="hidden" name="kode" value="1{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td>
                                            <button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas fa-check"></i></button>
                                        </td>
                                    </form>
                                    {{-- //////// TIDAK ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode" value="1{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Photo">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kartu Tanda Mahasiswa</td>
                                    {{-- ////////  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="name" value="Kartu Tanda Mahasiswa">
                                        <input type="hidden" name="kode" value="2{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Tanda Mahasiswa">
                                        <input type="hidden" name="kode" value="2{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kartu Tanda Penduduk</td>
                                    {{-- ////////  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="name" value="Kartu Tanda Penduduk">
                                        <input type="hidden" name="kode" value="3{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Tanda Penduduk">
                                        <input type="hidden" name="kode" value="3{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kartu Hasil Semester</td>
                                    {{-- ////////  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="name" value="Kartu Hasil Semester">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Hasil Semester">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="text" name="name" placeholder="Tambah data lain.."></td>
                                        @error('name')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                        {{-- ////////  ADA  ////////////// --}}
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Hasil Semester">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button disabled class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="text" name="name" placeholder="Tambah data lain.."></td>
                                        @error('name')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                        {{-- ////////  ADA  ////////////// --}}
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Hasil Semester">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button disabled class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <form action="{{ route('identitas.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <td><input type="text" name="name" placeholder="Tambah data lain..">
                                            @error('name')
                                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                            @enderror
                                        </td>
                                        {{-- ////////  ADA  ////////////// --}}
                                        <td><input type="file" name="image" /></td>
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Ada">
                                        <td><button class="btn btn-inverse-info btn-sm" type="submit"><i
                                                    class="fas  fa-check"></i></button></td>
                                    </form>
                                    {{-- //////// TIDAK  ADA  ////////////// --}}
                                    <form action="{{ route('identitas.store2') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data_register_id"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode" value="4{{ Auth::user()->id }}">
                                        <input type="hidden" name="name" value="Kartu Hasil Semester">
                                        <input type="hidden" name="status" value="Tidak Ada">
                                        <td><button disabled class="btn btn-inverse-danger btn-sm" type="submit"><i
                                                    class="fas  fa-times"></i></button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- //////////////////////////////// --}}
        {{-- ////////  STATUS UPLOAD DOKUMEN  ////////////// --}}
        {{-- /////////////////////////////// --}}
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-list"></i> Status Dokumen Pendukung</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Assesmen</th>
                                </tr>
                            </thead>
                            @foreach ($identitas as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="badge badge-light">{{ $data->status }}</div>
                                        </td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <form action="{{ route('identitas.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" type="submit"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
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

    <a href="{{ route('dashasesi.index') }}"><button class="btn btn-success btn-block"
            onclick="showSwal('success-message')">Kirim Data Registrasi <i class="fas fa-flag-checkered"></i></button></a>
    <br><br>
@endsection
