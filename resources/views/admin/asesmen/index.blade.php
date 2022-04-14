@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="page-header">
    <h4>
        <i class="fa fa-check-circle"></i>  Assesmen Mandiri
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
            <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Assesmen Mandiri</li>
        </ol>
    </nav>
</div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH ASSESMEN -->
    <!-- /////////////////////////////////// -->
<form action="{{ route('asesmen.store') }}" method="post">
    @csrf
    <div class="card btn-light">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Assesmen Mandiri</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Assesmen</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="100" class="form-control" name="asesmen">
                                @error('asesmen')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Kompetensi</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-lg"  name="unikom_id">
                                    <option value="" holder>Pilih Unit Kompetensi</option>
                                @foreach ($unikom as $asu)
                                    <option value="{{ $asu->id }}"
                                        @if ($asu->unikom_id == $asu->id)
                                            selected
                                        @endif>{{ $asu->unikom }}
                                    </option>
                                @endforeach
                                </select>
                                @error('unikom_id')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            <a href=""><button class="btn btn-inverse-info btn-block"><i class="fas fa-save"></i> Simpan</button></a>
        </div>
    </div>
</form><br>
    <!-- /////////////////////////////////// -->
    <!-- TANPIL ASSESMEN -->
    <!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="fas fa-cogs">    List Assesmen Mandiri</i></h4>
      <div class="row grid-margin">
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
              <div class="row">
                <div class="col-sm-12">
              <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
              <thead>
                <tr class="bg-dark text-white" role="row">
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 10.4219px;">#</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 10.5469px;">Action</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 909.75px;">Assesmen</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 447.5469px;">Unit Kompetensi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($asesmen as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $loop->iteration }}</td>
                  <td class="text-right">
                    <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        {{-- <a href="{{ route('asesmen.edit', $asu->id) }}"><button type="submit" class="btn btn-inverse-warning btn-sm"><i class="fa fa-edit "></i>  Edit Asesmen</button></a> --}}
                        {{-- <a href="{{ route('asesmen.show', $asu->id) }}"><button type="submit" class="btn btn-inverse-primary btn-sm"><i class="fa fa-list "></i>  Detail Asesmen</button></a> --}}
                        <form action="{{ route('asesmen.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                            @csrf
                            @method('delete')
                            <a href=""><button type="submit" class="btn btn-inverse-danger btn-sm btn-block"><i class="fa fa-trash "></i>  Hapus</button></a>
                        </form>
                    </div>
                </td>
                  <td>{{ $asu->asesmen }}</td>
                  <td>{{ $asu->unikom->unikom }}</td>

              </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
