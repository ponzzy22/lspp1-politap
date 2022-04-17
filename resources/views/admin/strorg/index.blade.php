@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-sitemap"></i> Edit Gambar Struktur Organisasi
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item">
            <a href="#"> </a>
            </li> --}}
                <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- UBAH GAMBAR --}}
    <!-- /////////////////////////////////// -->
    @foreach ($strorg as $asu)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Gambar</h4>
                <p class="card-description">
                    Persyaratan: Ukuran gambar harus -> 800x390px
                </p>
                <form action="{{ route('strorg.update', $asu->id) }}" class="forms-sample" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-info btn-icon-text">
                        <i class="fa fa-edit btn-icon-prepend"></i>
                        UPDATE
                    </button>
                    <a href="{{ route('strorg.index') }}"><button type="button" class="btn btn-danger btn-icon-text">
                            <i class="fa fa-times btn-icon-prepend"></i>
                            BATAL
                        </button></a>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <img src="{{ asset($asu->image) }}" style="width: 900px" alt="">
            </div>
        </div>
    @endforeach
@endsection
