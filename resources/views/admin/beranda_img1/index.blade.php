@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')

    {{-- <------------------- PAGE HEADER --------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-image"></i> Settingan Carousel
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
            </ol>
        </nav>
    </div><br>


    {{-- <------------------- TAMBAH CAROUSEL --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-images"></i> Tambah Carousel</h4>
            <p class="card-description">
                <i class="fas  fa-exclamation-circle"></i> Persyaratan: Ukuran gambar harus >> <code>4012 x 1701 px</code>
            </p>
            <form action="{{ route('beranda_img1.store') }}" class="forms-sample" method="POST"
                enctype="multipart/form-data">
                @csrf
                <label>File upload</label>
                        <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" maxlength="200" name="keterangan"><br>
                <button type="submit" class="btn btn-success btn-icon-text">
                    <i class="fa fa-plus btn-icon-prepend"></i>
                    TAMBAH
                </button>
                <a href="{{ route('beranda_img1.index') }}"><button type="button" class="btn btn-danger btn-icon-text">
                        <i class="fa fa-times btn-icon-prepend"></i>
                        BATAL
                    </button></a>
            </form>
        </div>
    </div>


    {{-- <------------------- LIST CAROUSEL --------------------> --}}
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="card-columns">
                    @foreach ($beranda_img1 as $asu)
                        <div class="card" style="background-color: rgb(196, 199, 191)">
                            <a href="{{ asset($asu->image) }}" target="_blank"><img class="card-img-top"
                                    src="{{ asset($asu->image) }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <a href="{{ route('beranda_img1.edit', $asu->id) }}"><button type="submit"
                                        class="btn btn-info btn-icon-text btn-sm btn-block">
                                        <i class="far fa-check-square btn-icon-prepend"></i>
                                        Edit Carousel
                                    </button><br></a>
                                <form action="{{ route('beranda_img1.destroy', $asu->id) }}" method="POST"
                                    onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm btn-block btn-icon-text">
                                        <i class="fas fa-trash btn-icon-prepend"></i>
                                        Hapus Carousel
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
