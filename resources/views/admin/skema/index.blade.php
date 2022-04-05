@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMBAH SKEMA --}}
<!-- /////////////////////////////////// -->
<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">    
  <div class="card">
    <div class="card-header" role="tab" id="heading-11">
      <h6 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true" aria-controls="collapse-11"> 
          &plus; Klik ini Untuk Tambah Skema 
        </a>
      </h6>
    </div>
    <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
      <div class="card-body">
          <form action="{{ route('skema.store') }}" method="POST" class="form-sample">
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
                    <label class="col-sm-3 col-form-label">Nama Skema</label>
                    <div class="col-sm-9">
                      <input type="text" name="skema" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kode Skema</label>
                    <div class="col-sm-9">
                      <input type="text" name="kode_skema" class="form-control" />
                    </div>
                  </div>
                </div>                
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Prodi</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="prodi_id">
                        <option value="" holder>Pilih Prodi</option>
                        @foreach ($prodi as $result)
                            <option value="{{ $result->id }}">{{ $result->prodi }}</option> 
                            select
                        @endforeach           
                    </select>   
                    </div>
                  </div>
                </div>   
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Asesor</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="asesor_id">
                        <option value="" holder>Pilih Asesor</option>
                        @foreach ($asesor as $result)
                            <option value="{{ $result->id }}">{{ $result->nama }}</option> 
                            select
                        @endforeach           
                    </select>   
                    </div>
                  </div>
                </div>  
              </div>   
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat Uji Kompetensi</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="tuk_id">
                        <option value="" holder>Pilih TUK</option>
                        @foreach ($tuk as $result)
                            <option value="{{ $result->id }}">{{ $result->tuk }}</option> 
                            select
                        @endforeach           
                    </select>   
                    </div>
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="status_id">
                        <option value="" holder>Pilih Status</option>
                        @foreach ($status as $result)
                            <option value="{{ $result->id }}">{{ $result->status }}</option> 
                            select
                        @endforeach           
                    </select>   
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
{{-- TAMPIL SKEMA --}}
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
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 61.4219px;">Kode Skema</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 75.75px;">Skema</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Prodi</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Asesor</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">TUK</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 60.141px;">Actions</th></tr>
              </thead>
              <tbody>
                @foreach ($skema as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $asu->kode_skema }}</td>
                  <td>{{ $asu->skema }}</td>
                  <td>{{ $asu->prodi->prodi }}</td>
                  <td>{{ $asu->asesor->nama }}</td>
                  <td>{{ $asu->tuk->tuk }}</td>
                  <td>
                    <label class="badge badge-light">{{ $asu->status->status }}</label>                    
                  </td>
                  <td class="text-right">                    
                      <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <a class="dropdown-item" href="#">Assesmen Mandiri</a>
                      </div>
                    <a href="{{ route('skema.edit', $asu->id) }}"><button class="btn btn-inverse-warning">
                      <i class="fa fa-edit"></i>
                    </button></a>
                    <a href="{{ route('skema.show', $asu->id) }}"><button class="btn btn-inverse-info">
                      <i class="fa fa-eye"></i>
                    </button></a>
                    <form action="{{ route('skema.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
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

{{-- <ul>
  @foreach ($skema as $asu)
      <li><a href="">{{ $asu->skema }} <span>{{ $asu->unikom->count() }}</span> </a></li>
  @endforeach
</ul> --}}

{{-- @foreach ($skema as $asu)
    <a href="{{ route('show_kluster', $asu->id ) }}"><h1>{{ $asu->skema }}</h1></a>
    
    @endforeach --}}

@endsection