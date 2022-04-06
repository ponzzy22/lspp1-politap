@extends('layout/2')
@section('isi')
@include('layout/verifikasi')


<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Assesmen Mandiri dari {{ $unikom->unikom }}</h4>
          <p class="card-description">
            {{-- Add class <code>.table</code> --}}
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th style="width: 500px">Assesmen.</th>
                  <th style="width: 100px">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($unikom->asesmens as $asu)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $asu->asesmen }}</td>
                  <td>
                    <form action="{{ route('asesmen.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                      @csrf
                      @method('delete')                 
                      <button type="submit" class="btn btn-inverse-danger">
                        <i class="fa fa-trash "></i>
                      </button>
                  </form> 
                    <button  class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                      </button>
                      {{-- <form action="{{ route('asesmen.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <a type="submit"  href=""><i class="fas fa-trash"></i>HAPUS</a>
                        @csrf
                        @method('delete')  
                      </div>
                      </form> --}}
                    </td>                  
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Assesmen</h4>
          <p class="card-description">
            {{-- Add class <code>.table-hover</code> --}}
          </p>
          <div class="row">
            <form action="{{ route('asesmen.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="asesmen" placeholder="Assesmen Mandiri" aria-label="Recipient's username">
                @error('asesmen')
                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                @enderror
                <div class="input-group-append">
                  <button class="btn btn-sm btn-success" name="unikom_id" value="{{ $unikom->id }}" type="submit">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection