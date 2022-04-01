@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMBAH ASESOR --}}
<!-- /////////////////////////////////// -->

<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">    
    <div class="card">
      <div class="card-header" role="tab" id="heading-11">
        <h6 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true" aria-controls="collapse-11"> 
            &plus; Klik ini Untuk Tambah Asesor 
          </a>
        </h6>
      </div>
      <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
        <div class="card-body">
            <form action="{{ route('asesor.store') }}" method="POST" enctype="multipart/form-data" class="form-sample">
                @csrf
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
                        <input type="text" name="nama" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">NIK</label>
                      <div class="col-sm-9">
                        <input type="text" name="nik" class="form-control">
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
                        <input class="form-control" name="email">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="alamat">
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
                      <label class="col-sm-3 col-form-label">Status Asesor</label>
                      <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="Aktif" checked="">
                            Aktif
                          <i class="input-helper"></i></label>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="Nonaktif">
                            Nonaktif
                          <i class="input-helper"></i></label>                  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- /////////////////////////////////// -->
  {{-- TAMPIL ASESOR --}}
  <!-- /////////////////////////////////// -->
  <div class="card">
      <div class="card-body">
        <h4 class="card-title"><i class="fas fa-cogs">    DAFTAR ASESOR</i></h4>
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
                  <tr class="bg-primary text-white" role="row">
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 61.4219px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 75.75px;">Kode</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 194.141px;">Actions</th></tr>
                </thead>
                <tbody>
                  @foreach ($asesor as $hasil => $asu)
                  <tr role="row" class="odd">
                    <td class="">{{ $loop->iteration }}</td>
                    <td>{{ $asu->nik }}</td>
                    <td>{{ $asu->nama }}</td>
                    <td>
                      <label class="badge badge-light">{{ $asu->status }}</label>                    
                    </td>
                    <td class="text-right">                    
                        <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                        </div>
                      <a href="{{ route('asesor.edit', $asu->id) }}"><button class="btn btn-inverse-warning">
                        <i class="fa fa-edit"></i>
                      </button></a>
                      <button class="btn btn-inverse-info">
                        <i class="fa fa-eye"></i>
                      </button>
                      <form action="{{ route('asesor.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                        @csrf
                        @method('delete')                 
                        <button type="submit" class="btn btn-inverse-danger">
                          <i class="fa fa-trash "></i>
                        </button>
                    </form> 
                    </td>
                </tr>
                  @endforeach              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
    
@endsection