@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH UJIKOM --}}
    <!-- /////////////////////////////////// -->
    <div class="page-header">
        <h4>
            <i class="fas fa-image"></i> Galeri Foto
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeri Foto</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH DATA -->
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-10">
                <h6 class="mb-0">
                    <a data-toggle="collapse" href="#collapse-10" aria-expanded="false" aria-controls="collapse-10"
                        class="collapsed">
                        + Tambah Album Baru
                    </a>
                </h6>
            </div>
            <div id="collapse-10" class="collapse" role="tabpanel" aria-labelledby="heading-10"
                data-parent="#accordion-4" style="">
                <div class="card-body">
                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="galeri" class="form-control" placeholder="Nama Album"
                            value=""><br>
                        <button class="btn btn-inverse-success btn-sm btn-block" type="submit"><i
                                class="fas fa-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->

    <div class="row">
        <div class="col-md-12">
            <div class="row portfolio-grid">
                @foreach ($galeri as $asu)
                    <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="card-body">
                            <figure class="effect-text-in">
                                <img src="{{ asset('assets/images/auth/placeholder_image1.png') }}" alt="image">
                                <figcaption>
                                    <h4>{{ $asu->galeri }}</h4>
                                    <p>{{ $asu->created_at }}</p>
                                </figcaption>
                            </figure>
                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-cog"></i> {{ $asu->galeri }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                <a href="{{ route('galeri.show', $asu->id) }}"><button
                                        class="btn btn-warning btn-sm btn-block"><i class="fa fa-eye "></i> Lihat &
                                        Edit Galeri {{ $asu->galeri }}</button></a>
                                <form action="{{ route('galeri.destroy', $asu->id) }}" method="POST"
                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                    @csrf
                                    @method('delete')
                                    <a href=""><button type="submit"
                                            class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash "></i>
                                            Hapus Album {{ $asu->galeri }}</button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
