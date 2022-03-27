@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="page-header">
  <h3>
  <i class="fas fa-cogs"></i> Settingan Portofolio Karyawan
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
<div class="card">
  <div class="card-body">
    <div class="card-title">      
      <form action="{{ route('beranda_img2.store') }}" method="POST" enctype="multipart/form-data">
        @csrf        
            <label>Tambah Portofolio Karyawan</label>
            <textarea class="form-control" id="exampleTextarea1" rows="1" name="keterangan" placeholder="Jabatan Karyawan"></textarea><br>
            <input type="file" class="form-control" name="image"><br>
            <div class="form-action">
              <button type="submit" class="btn btn-primary btn-icon-text">
                <i class="fas fa-plus btn-icon-prepend"></i>
                TAMBAH
              </button>
              <a href="{{ route('beranda_img2.index') }}"><button type="button" class="btn btn-danger btn-icon-text">
                <i class="fa fa-times btn-icon-prepend"></i>
                BATAL
              </button></a>    
            </div>
        </form>
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
                            <img src="{{ asset($asu->image) }}" alt="image" />
                            <figcaption>
                                <!-- <h5>Budi Pratomo Sibuea, S.ST.,M.ST</h5> -->
                                <p>{{ $asu->keterangan }}</p>
                            </figcaption>
                        </figure>
                        
                      <form action="{{ route('beranda_img2.update', $asu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <textarea class="form-control" id="exampleTextarea1" rows="1" name="keterangan" placeholder="Jabatan Karyawan"></textarea><br>
                        <input type="file" class="form-control" name="image"><br>
                        <div class="form-action">
                          <button type="submit" class="btn btn-info btn-icon-text">
                            <i class="far fa-check-square btn-icon-prepend"></i>
                            Update
                          </button>
                        </div>
                      </form><br>

                      <form action="{{ route('beranda_img2.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                          @csrf
                          @method('delete')                    
                          <button type="submit" class="btn btn-danger btn-icon-text">
                            <i class="fas fa-trash btn-icon-prepend"></i>
                            Hapus
                          </button>
                      </form> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>        
      </div>
    </div>
  </div>  
  
@endsection