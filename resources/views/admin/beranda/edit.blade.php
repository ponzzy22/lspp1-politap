@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Edit Nama Website
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('sett-beranda.index') }}">Nama Website</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Nama Website</li>
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
                    <label for="exampleInputName1">Nama Website</label>
                    <textarea class="summernote" maxlength="50" id="exampleTextarea1" rows="3"
                        name="judul">{{ $beranda->judul }}</textarea>
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
