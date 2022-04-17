@extends('layout/2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-user"></i> Edit Pengguna
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- EDIT DATA -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data"
                class="form-sample">
                @csrf
                @method('put')
                <a href=""><button class="btn btn-inverse-info btn-block"><i class="fas fa-save"></i> Update data
                        Pengguna</button></a>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="100" class="form-control" name="name"
                                    value="{{ $user->name }}">
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
                                <input type="number" maxlength="100" class="form-control" name="email"
                                    value="{{ $user->email }}">
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
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                    <input type="email" maxlength="100" class="form-control" name="surel"
                                        value="{{ old('surel', $user->surel) }}">
                                </div>
                                @error('surel')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    value="{{ old('tgl_lahir', $user->tgl_lahir) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="100" class="form-control" name="tmpt_lahir"
                                    value="{{ old('tmpt_lahir', $user->tmpt_lahir) }}">
                                @error('tmpt_lahir')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Post</label>
                            <div class="col-sm-9">
                                <input type="number" maxlength="50" class="form-control" name="kode_post"
                                    value="{{ old('kode_post', $user->kode_post) }}">
                                @error('kode_post')
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
                                    <input type="number" maxlength="50" class="form-control" name="no_hp"
                                        value="{{ old('no_hp', $user->no_hp) }}">
                                </div>
                                @error('no_hp')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Warga Negara</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="100" class="form-control" name="negara"
                                    value="{{ old('negara', $user->negara) }}">
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
                            <label class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <input type="file" name="image" var class="form-control">
                                </div><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset($user->image) }}" width="150px" height="200px" type="application/pdf">
                        {{-- <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <div class="input-group-prepend">
                            <input type="password" maxlength="20"  name="password" var class="form-control">
                        </div><br>
                    </div>
                </div> --}}
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
@endsection
