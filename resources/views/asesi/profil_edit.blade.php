@extends('layout/asesi1')
@section('judul')
Profil Anda | LSP-POLITAP
@endsection
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-user"></i>  Profil Anda
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil Anda</li>
            </ol>
        </nav>
    </div><br>
    <div class="card">
        <div class="card-body">
            <h5 class="font font-weight-bold">Lengkapi Profile Anda</h5>
            <form action="{{ route('formulirapl2.update') }}" method="POST" enctype="multipart/form-data"
                class="form-sample">
                @csrf
                @method('put')
                <p class="card-description">
                    <i class="fas fa-info-circle"></i> Info Personal
                </p>
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
                                <input type="number" maxlength="25" class="form-control" name="email"
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
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}">
                                @error('tempat_lahir')
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
                                    <input type="email" class="form-control" name="email2"
                                        value="{{ old('email2', Auth::user()->email2) }}">
                                </div>
                                @error('email2')
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
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9">
                                <input type="number" maxlength="25" class="form-control" name="email"
                                    value="{{ old('email', Auth::user()->email) }}">
                                @error('password')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div> --}}
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
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <input type="file" name="image" accept=".png" class="form-control">
                                    <a href="{{ old('image', Auth::user()->image) }}" target="_blank"
                                        class="btn btn-info"><i class="fas fa-download"></i></a>
                                </div><br>
                                <img src="{{ old('image', Auth::user()->image) }}" width="300px" type="application/pdf">
                            </div>
                        </div>
                    </div>
                </div>

                <a href=""><button class="btn btn-info btn-block"><i class="fas fa-save"></i> Simpan</button></a>
            </form>
        </div>
    </div>
@endsection
