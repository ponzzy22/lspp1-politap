@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-users"></i> Settingan Portofolio Karyawan
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
                <li class="breadcrumb-item active" aria-current="page">Portofolio Karyawan</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH GAMBAR --}}
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Pengelola
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <p class="card-description">
                        <i class="fas  fa-exclamation-circle"></i> Persyaratan: Ukuran gambar harus >>
                        <code>470x625px</code>
                    </p>
                    <form action="{{ route('beranda_img2.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Pengelola</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="nama" placeholder="Nama Pengelola"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Jabatan</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="keterangan" placeholder="Jabatan Pengelola"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" maxlength="40" placeholder="No Hp" name="no_hp"
                                    id="">
                                @error('no_hp')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link Facebook</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="facebook" placeholder="Link Facebook"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Twitter</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="twitter" placeholder="Link Twitter"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Instagram</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="instagram" placeholder="Link Instagram"></textarea><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link Email</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="email" placeholder="Link Email"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <input type="file" class="form-control" name="image"><br>
                            </div>
                        </div>
                        <div class="form-action">
                            <button type="submit" class="btn btn-primary btn-icon-text">
                                <i class="fas fa-plus btn-icon-prepend"></i>
                                TAMBAH
                            </button>
                            <a href="{{ route('beranda_img2.index') }}"><button type="button"
                                    class="btn btn-danger btn-icon-text">
                                    <i class="fa fa-times btn-icon-prepend"></i>
                                    BATAL
                                </button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    {{-- SHOW GAMBAR --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-12">
                        <div class="row portfolio-grid">
                            @foreach ($beranda_img2 as $asu)
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <figure class="effect-text-in">
                                        <figcaption>
                                            <!-- <h5>Budi Pratomo Sibuea, S.ST.,M.ST</h5> -->
                                            <p>{{ $asu->keterangan }}</p>
                                        </figcaption>
                                    </figure>
                                    <div class="card">
                                        <img src="{{ asset($asu->image) }}" alt="image" />
                                        <div class="card-body">
                                            <a href="{{ route('beranda_img2.edit', $asu->id) }}"><button type="submit"
                                                    class="btn btn-info btn-block btn-sm btn-icon-text">
                                                    <i class="fas fa-edit  btn-icon-prepend"></i>
                                                    Edit
                                                </button><br></a>
                                            <form action="{{ route('beranda_img2.destroy', $asu->id) }}" method="POST"
                                                onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-block btn-sm btn-icon-text">
                                                    <i class="fas fa-trash  btn-icon-prepend"></i>
                                                    Hapus
                                                </button><br>
                                            </form>
                                        </div>
                                    </div>
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
