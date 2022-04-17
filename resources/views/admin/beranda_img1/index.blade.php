@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-image"></i> Settingan Carousel
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH GAMBAR --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Carousel</h4>
            <p class="card-description">
                Persyaratan: Ukuran gambar harus -> 800x390px
            </p>
            <form action="{{ route('beranda_img1.store') }}" class="forms-sample" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" class="form-control" name="image">
                </div>
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
    <!-- /////////////////////////////////// -->
    {{-- TAMPIL GAMBAR --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="card-columns">
                    @foreach ($beranda_img1 as $asu)
                        <div class="card">
                            <a href="{{ asset($asu->image) }}" target="_blank"><img class="card-img-top"
                                    src="{{ asset($asu->image) }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <form action="{{ route('beranda_img1.update', $asu->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <input type="file" class="form-control" name="image">
                                    <br>
                                    <div class="form-action">
                                        <button type="submit" class="btn btn-info btn-icon-text btn-sm btn-block">
                                            <i class="far fa-check-square btn-icon-prepend"></i>
                                            Update
                                        </button>
                                    </div>
                                </form><br>
                                <form action="{{ route('beranda_img1.destroy', $asu->id) }}" method="POST"
                                    onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm btn-block btn-icon-text">
                                        <i class="fas fa-trash btn-icon-prepend"></i>
                                        Hapus
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
