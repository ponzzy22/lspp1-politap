@extends('layout/4')
@section('isi')
@include('layout/verifikasi')
<div class="page-header">
  <h4>
      <i class="fas fa-circle"></i>  Langkah Ke-1 <i class="fas fa-angle-double-right"></i> Menentukan Skema
  </h4>
</div><br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">
        <i class="fas fa-table"></i>
        List Skema
      </h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>              
              <th class="text-muted">Kode Skema</th>
              <th class="text-muted">Nama Skema</th>
              <th class="text-muted">Status</th>
              <th class="text-muted">Action</th>
            </tr>
          </thead>
          <tbody>
    @foreach ($skema as $asu)
    <tr>
        <td class="font-weight-bold">
          {{ $asu->kode_skema }}
        </td>
        <td class="font-weight-bold">
          {{ $asu->skema }}
        </td>
        <td>
            <label class="badge badge-light badge-pill">{{ $asu->status->status }}</label>
        </td>
        <td>
          <a href="{{ route('registrasi.edit', $asu->id) }}"><button class="btn btn-inverse-info btn-block font-weight-bold"><i class="fas fa-ellipsis-h"></i>  Daftar <i class="fas fa-ellipsis-h"></i></button></a>
        </td>
      </tr>
    @endforeach            
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection