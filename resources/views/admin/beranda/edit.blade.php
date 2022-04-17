@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Edit Judul & Deskripsi
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('sett-beranda.index') }}">Judul & Deskripsi</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Judul & Deskripsi</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- MAIN WEBSITE -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sett-beranda.update', $beranda->id) }}" class="forms-sample" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="exampleInputName1">Judul Baris Pertama</label>
                    <textarea class="form-control" maxlength="20" id="exampleTextarea1" rows="1"
                        name="judul">{{ $beranda->judul }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Judul Baris Kedua</label>
                    <textarea class="form-control" maxlength="30" id="exampleTextarea1" rows="1"
                        name="judul2">{{ $beranda->judul2 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi</label>
                    <textarea class="summernote" maxlength="1000" id="exampleTextarea1" rows="6"
                        name="deskripsi">{{ $beranda->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn-icon-text">
                    <i class="fa fa-check-square btn-icon-prepend"></i>
                    UPDATE
                </button>
                <a href="{{ route('sett-beranda.edit', $beranda->id) }}"><button type="button"
                        class="btn btn-danger btn-icon-text">
                        <i class="fa fa-times btn-icon-prepend"></i>
                        BATAL
                    </button></a>
            </form>
        </div>
    </div>
@endsection
