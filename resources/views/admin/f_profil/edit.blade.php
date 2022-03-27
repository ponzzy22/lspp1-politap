@extends('layout/2')

@section('isi')
@include('layout/verifikasi')

<div class="page-header">
  <h3>
  <i class="fas fa-cogs"></i> EDIT JUDUL & DESKRIPSI WEBSITE
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
      <h4 class="card-title">Basic form elements</h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form action="{{ route('f_profil.update', $profil->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">        
        @csrf
        @method('patch')
        <div class="form-group">
          <label for="exampleTextarea1">Profil LSP P1-POLITAP</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4" name="profil">{{ $profil->profil }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleTextarea1">Visi LSP P1-POLITAP</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="visi">{{ $profil->visi }}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Misi LSP P1-POLITAP</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="misi">{{ $profil->misi }}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Motto LSP P1-POLITAP</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="motto">{{ $profil->motto }}</textarea>
          </div>
          <input type="file" class="form-control" name="image"><br>
        <button type="submit" class="btn btn-info btn-icon-text">
                            <i class="far fa-check-square btn-icon-prepend"></i>
                            Update
                          </button>
      </form>  
      {{-- <form action="{{ route('beranda_img2.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
        @csrf
        @method('delete')
  
        <button type="submit" class="btn btn-danger btn-icon-text">
          <i class="fas fa-trash btn-icon-prepend"></i>
          Hapus
        </button>
    </form>  --}}
    </div>
  </div>
@endsection