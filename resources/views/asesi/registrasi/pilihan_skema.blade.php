@extends('layout/3')
@section('isi')
@include('layout/verifikasi')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">
        <i class="fas fa-table"></i>
        Pilih Skema
      </h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th class="text-muted">Nama Skema</th>
              <th>Kode Skema</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
    @foreach ($skema as $asu)
    <tr>
        <td class="font-weight-bold">
          {{ $asu->skema }}
        </td>
        <td class="text-muted">
          {{ $asu->kode_skema }}
        </td>
        <td>
            <label class="badge badge-light badge-pill">{{ $asu->status->status }}</label>
        </td>
        <td>
          <a href="{{ route('registrasi.edit', $asu->id) }}"><button class="btn btn-inverse-info btn-pill">DAFTAR</button></a>
        </td>
      </tr>
    @endforeach            
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection