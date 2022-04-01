@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMBAH TUK --}}
<!-- /////////////////////////////////// -->
<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">    
  <div class="card">
    <div class="card-header" role="tab" id="heading-11">
      <h6 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true" aria-controls="collapse-11"> 
          &plus; Klik ini Untuk Tambah TUK 
        </a>
      </h6>
    </div>
    <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
      <div class="card-body">
          <form action="{{ route('tuk.store') }}" method="POST" class="form-sample">
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
                    <label class="col-sm-3 col-form-label">TUK</label>
                    <div class="col-sm-9">
                      <input type="text" name="tuk" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" name="alamat" class="form-control" />
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
{{-- TAMPIL TUK --}}
<!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="fas fa-cogs">    DAFTAR SKEMA</i></h4>
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
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 75.75px;">TUK</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Keterangan</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 194.141px;">Actions</th></tr>
              </thead>
              <tbody>
                @foreach ($tuk as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $loop->iteration}}</td>
                  <td>{{ $asu->tuk }}</td>
                  <td>{{ $asu->alamat }}</td>
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
                    <button class="btn btn-inverse-info">
                      <i class="fa fa-eye"></i>
                    </button>
                    <form action="{{ route('tuk.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
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