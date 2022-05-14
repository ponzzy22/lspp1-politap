@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')

    {{-- <------------------- PAGE HEADER --------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-image"></i> Edit Carousel
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('beranda_img1.index') }}">Carousel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Carousel</li>
            </ol>
        </nav>
    </div><br>


    {{-- <-------------------EDIT CAROUSEL --------------------> --}}
    <div class="card">
        <div class="card-body">
                <img src="{{ asset($beranda_img1->image) }}" width="500px" alt="carousel">
        <div class="card-body">
            <form action="{{ route('beranda_img1.update', $beranda_img1->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <label for="file">Pilih Gambar</label>
                <input type="file" class="form-control" id="file" name="image">
                <br>
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $beranda_img1->judul }}">
                <br>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="{{ $beranda_img1->keterangan }}">
                <div class="form-action"><br>
                    <button type="submit" class="btn btn-info btn-icon-text btn-block">
                        <i class="far fa-check-square btn-icon-prepend"></i>
                        Update
                    </button>
                </div>
            </form><br>
        </div>
        </div>
    </div>
@endsection
