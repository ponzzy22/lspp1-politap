@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">    
  <div class="card">
      <div class="card-header" role="tab" id="heading-11">
      <h6 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true" aria-controls="collapse-11"> 
              &plus; Klik ini Untuk Tambah Unit Kompetensi 
          </a>
      </h6>
      </div>
      <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
          <div class="card-body">
          <form action="{{ route('unikom.store') }}" method="POST" class="form-inline">
              @csrf
              <label class="sr-only" for="inlineFormInputName2"></label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="kode_unikom" placeholder="Kode Unit">
              
              <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
              <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="unikom" placeholder="Nama Unit Kompetensi">
              </div>
              
              <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
              <div class="input-group mb-2 mr-sm-2">
              </div>                
              <button type="submit" name="skema_id" value="{{ $skema->id }}" class="btn btn-success mb-2"><i class="fas fa-save">  Simpan</i></button>
          </form>    
          </div>
      </div>
  </div>
</div>



<div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="fas fa-cogs">    List Unit Kompetensi </i></h4>
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
                <tr class="bg-success text-white" role="row">
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 1.42px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 20.725px;">Kode Unit </th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 250.5469px;">Unit Kompetensi</th>
                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 60.141px;">Actions</th></tr>
              </thead>
              <tbody>
                @foreach ($skema->unikoms as $asu)
                <tr role="row" class="odd">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $asu->kode_unikom }}</td>
                  <td>{{ $asu->unikom }} </td>
                  <td class="text-right">                    
                      <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <a class="dropdown-item" href="#">Assesmen Mandiri</a>
                      </div>
                    <a href="{{ route('unikom.edit', $asu->id) }}"><button class="btn btn-inverse-warning">
                      <i class="fa fa-edit"></i>
                    </button></a>
                    <a href="{{ route('show_asesmen', $asu->id) }}"><button class="btn btn-inverse-info">
                      <i class="fa fa-eye"></i>
                    </button></a>
                    
                    <form action="{{ route('unikom.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
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