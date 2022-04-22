@extends('layout/2')
@section('isi')
    @include('layout/verifikasi')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('beranda_img2.update', $pengelola->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-4">
                        <label>Nama Pengelola</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="nama">{{ $pengelola->nama }}</textarea><br>
                    </div>

                    <div class="col-md-4">
                        <label>Jabatan</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="keterangan" >{{ $pengelola->keterangan }}</textarea><br>
                    </div>

                    <div class="col-md-4">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" value="{{ $pengelola->no_hp }}"  maxlength="40" name="no_hp"
                            id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Link Facebook</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="facebook">{{ $pengelola->facebook }}</textarea><br>
                    </div>

                    <div class="col-md-4">
                        <label>Link Twitter</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="twitter">{{ $pengelola->twitter }}</textarea><br>
                    </div>

                    <div class="col-md-4">
                        <label>Link Instagram</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="instagram">{{ $pengelola->instagram }}</textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Link Email</label>
                        <textarea class="form-control" maxlength="40" rows="1" name="email" >{{ $pengelola->email }}</textarea><br>
                    </div>

                    <div class="col-md-4">
                        <input type="file" class="form-control" name="image"><br>
                    </div>
                </div>
                <div class="form-action">
                    <button type="submit" class="btn btn-info btn-icon-text">
                        <i class="fas fa-edit btn-icon-prepend"></i>
                        Update
                    </button>
            </form><br>
        </div>
    </div>
@endsection
