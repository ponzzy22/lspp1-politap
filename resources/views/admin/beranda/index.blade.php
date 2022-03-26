@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="page-header">
    <h3>
    <i class="fas fa-cogs"></i>SETTINGAN HALAMAN BERANDA
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
            <li class="breadcrumb-item active" aria-current="page">Judul & Deskripsi</li>
        </ol>
    </nav>
</div><br>

<!-- /////////////////////////////////// -->
{{-- MAIN WEBSITE --}}
<!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Pengaturan Judul & Deskripsi Web</h4>
      <div class="row">
        @foreach ($beranda as $apa)
        <div class="table-sorter-wrapper col-lg-12 table-responsive">
          <a href="{{ route('sett-beranda.edit', $apa->id) }}"> 
              <button type="button" class="btn btn-warning btn-icon-text">
                <i class="far fa-edit btn-icon-prepend"></i>
                EDIT
              </button>
          </a>
          <table id="sortable-table-1" class="table">
            <thead>
              <tr>
                <th class="sortStyle">Judul Utama<i class="fa fa-angle-down"></i></th>
                <th class="sortStyle">Judul Baris Kedua <i class="fa fa-angle-down"></i></th>
              </tr>
            </thead>
            <tbody>            
              <tr>
                <td><h5>{{ $apa->judul }}</h5></td>
                <td><h5>{{ $apa->judul2 }}</h5></td>              
            </tbody>
          </table>
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h5>Deskripsi Web</h5>
              </div>
            </div>
            <div class="card-body">
              <h6>{{ $apa->deskripsi }}</h6>
            </div>        
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
@endsection