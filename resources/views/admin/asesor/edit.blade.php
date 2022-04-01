@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMBAH ASESOR --}}
<!-- /////////////////////////////////// -->
<div class="card">
  <div class="card-body">
    <div class="card-title">
      <h4>Edit Asesor</h4>
    </div>
    <form action="{{ route('asesor.update', $asesor->id) }}" method="POST" enctype="multipart/form-data" class="form-sample">
        @csrf
        @method('patch')
        <div class="card-description text-right">
            <button type="submit" class="btn btn-success btn-icon-text">
                <i class="fa fa-plus btn-icon-prepend"></i>
                Tambahkan
            </button>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama </label>
              <div class="col-sm-9">
                <input type="text" name="nama" class="form-control" value="{{ $asesor->nama }}">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Kode</label>
              <div class="col-sm-9">
                <input type="text" name="nik" class="form-control" value="{{ $asesor->nik }}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-9">
                <select class="form-control" name="sex">
                    <option value="" holder>Pilih Jenis Kelamin</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input class="form-control" name="email" value="{{ $asesor->email }}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                <input class="form-control" name="alamat" value="{{ $asesor->alamat }}">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="image">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
                <select class="form-control" name="status">
                  <option value="{{ $asesor->status }}" holder>{{ $asesor->status }}</option> 
                  <option value="Aktif" holder>Aktif</option> 
                  <option value="Nonaktif" holder>Nonaktif</option>                   
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
</div>

@endsection