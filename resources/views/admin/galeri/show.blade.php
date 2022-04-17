@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <!-- /////////////////////////////////// -->
    {{-- BREADCRUMB --}}
    <!-- /////////////////////////////////// -->
    <div class="page-header">
        <h4>
            <i class="fas fa-eye"></i> Album Foto {{ $galeri->galeri }}
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('galeri.index') }}">Galeri Foto</a></li>
                <li class="breadcrumb-item active" aria-current="page">Album Foto {{ $galeri->galeri }}</li>
            </ol>
        </nav>
    </div>
    <!-- /////////////////////////////////// -->
    <!-- UPLOAD DATA -->
    <!-- /////////////////////////////////// -->
    <div class="row">
        <div hidden class="card">
            <div class="card-header">
                <h4>Multiple Upload</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data"
                    class="dropzone" id="mydropzone">
                    @csrf
                    <div class="fallback">
                        <input type="hidden" name="group_galeri_id" value="dfsdf">
                        <input type="file" name="image[]" multiple="true">
                    </div> <button type="submit" class="btn btn-block btn-su"></button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-4">
                <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-10">
                            <h6 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-10" aria-expanded="false"
                                    aria-controls="collapse-10" class="collapsed">
                                    Tambah Foto Baru ke Album {{ $galeri->galeri }}
                                </a>
                            </h6>
                        </div>
                        <div id="collapse-10" class="collapse" role="tabpanel" aria-labelledby="heading-10"
                            data-parent="#accordion-4" style="">
                            <div class="card-body">
                                <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data"
                                    class="dropzone" id="mydropzone">
                                    <div class="card-body">
                                        @csrf
                                        <div class="fallback">
                                            <input type="hidden" name="group_galeri_id" value="{{ $galeri->id }}">
                                            <input type="file" name="image[]" multiple="true">
                                            <button type="submit" class="btn btn-inverse-success"><i
                                                    class="fas fa-upload"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        {{-- EDIT GALERI --}}
        <!-- /////////////////////////////////// -->
        <div class="col-md-6">
            <div class="mt-4">
                <div class="accordion accordion-solid-header" id="accordion-5" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-11">
                            <h6 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-11" aria-expanded="false"
                                    aria-controls="collapse-11" class="collapsed">
                                    Ubah Nama Folder/Album {{ $galeri->galeri }}
                                </a>
                            </h6>
                        </div>
                        <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                            data-parent="#accordion-5" style="">
                            <div class="card-body">
                                <form action="{{ route('galeri.update', $galeri->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="text" name="galeri" class="form-control"
                                        value="{{ $galeri->galeri }}">
                                    <button class="btn btn-inverse-success btn-sm btn-block" type="submit"><i
                                            class="fas fa-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row portfolio-grid">
                        @foreach ($galeri->galeri_fotos as $foto)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <figure class="effect-text-in">
                                    <img src="{{ asset($foto->image) }}" alt="image">
                                    <figcaption>
                                        <form action="{{ route('delete_galeri_foto.destroy', $foto->id) }}" method="POST"
                                            onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                            @csrf
                                            @method('delete')
                                            <a href="">
                                                <p><button type="submit" class="btn btn-danger btn-sm btn-block"><i
                                                            class="fa fa-trash "></i> Hapus</button></p>
                                            </a>
                                        </form>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
