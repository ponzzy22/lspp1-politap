@extends('layout/5')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-info"></i> Informasi Pendaftaran
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informasi Pendaftaran</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- INPUT INFO ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h5><i class="fas fa-info-circle"></i> Update Informasi Pendaftaran</h5>
                <p class="card-description">
                    {{-- <i class="fas  fa-exclamation-circle"></i> Persyaratan: Ukuran gambar harus >> <code>1366x724px</code> --}}
                </p>
            </div><br>
            <div class="row">
                @foreach ($info as $asu)
                    <div class="col-md-5">
                        <img src="{{ asset($asu->image) }}" width="550px" alt=""><br><br>

                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('info.update', $asu->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label for="file">Input Gambar</label>
                            <input type="file" class="form-control" name="image" id="file"><br><br>
                            <label for="asu">Input Keterangan</label>
                            <textarea name="keterangan" class="summernote" id="" cols="30" rows="10">{!! $asu->keterangan !!}</textarea>
                            <br>
                            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i> Update</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
