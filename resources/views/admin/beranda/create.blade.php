@extends('layout/2')
@section('isi')

<div class="page-header">
    <h3>
    <i class="fas fa-cogs"></i> SETTINGAN HALAMAN BERANDA
    </h3>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
            <li class="breadcrumb-item"><a href="#">Setting-Beranda</a></li>
            <li class="breadcrumb-item">
                <a href="#"> </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">create</li>
        </ol>
    </nav>
</div><br>

<div class="card">
  <form action="{{ route('sett-beranda.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="exampleTextarea1">judul</label>
        <textarea class="form-control" id="exampleTextarea1" rows="4" value="" name="judul"></textarea>
      </div>
    
      <div class="form-group">
        <label for="exampleTextarea1">deskripsi</label>
        <textarea class="form-control" id="exampleTextarea1" rows="4" name="deskripsi"></textarea>
      </div>
    
      <div class="form-action">
      <button type="submit" class="btn btn-primary btn-icon-text">
        <i class="far fa-check-square btn-icon-prepend"></i>
        Submit
      </button>
    </div>
  </form>
    </div>



@endsection