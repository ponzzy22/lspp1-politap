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
            <li class="breadcrumb-item"><a href="#">Setting-Beranda </a></li>
            <li class="breadcrumb-item">
                <a href="#"> </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div><br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic Sortable Table</h4>
      <p class="page-description">Add class <code>.sortable-table</code></p>
      <div class="row">
        <div class="table-sorter-wrapper col-lg-12 table-responsive">
           <a href="{{ route('sett-beranda.create') }}"> <button type="button" class="btn btn-primary btn-icon-text">
                <i class="far fa-check-square btn-icon-prepend"></i>
                Submit
              </button></a>
          <table id="sortable-table-1" class="table">
            <thead>
               
                    
                
              <tr>
                <th>#</th>
                <th class="sortStyle">JUDUL<i class="fa fa-angle-down"></i></th>
                <th class="sortStyle">DESKRIPSI <i class="fa fa-angle-down"></i></th>
                <th class="sortStyle">AKSI<i class="fa fa-angle-down"></i></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($beranda as $apa)
              <tr>
                <td>#</td>
                <td><h4>{{ $apa->judul }}</h4></td>
                <td>{{ $apa->deskripsi }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('sett-beranda.edit', $apa->id) }}"><button type="button" class="btn btn-info">
                          <i class="fas fa-pencil-alt"></i>
                        </button></a>
                        <button type="button" class="btn btn-success">
                          <i class="far fa-calendar"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  
@endsection