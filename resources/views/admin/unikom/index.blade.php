@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMBAH UJIKOM --}}
<!-- /////////////////////////////////// -->



<!-- /////////////////////////////////// -->
{{-- TAMPIL UJIKOM --}}
<!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="fas fa-cogs">   LIST UNIT KOMPETENSI</i></h4>
      <div class="row grid-margin">
      </div>    
      <div class="card-description text-left">
        <a href="{{ route('unikom.create') }}"><button type="submit" class="btn btn-success btn-icon-text">
          <i class="fa fa-plus btn-icon-prepend"></i>
          Tambah Unit Kompetensi
        </button></a>
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
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 75.75px;">Kode Unit</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Unit Kompetensi</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Skema</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 194.141px;">Actions</th></tr>
              </thead>
              <tbody>
                @foreach ($unikom as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $loop->iteration}}</td>
                  <td>{{ $asu->kode_unikom }}</td>
                  <td>{{ $asu->unikom }}</td>
                  <td>{{ $asu->skema->skema }}</td>
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
                      <a href="{{ route('unikom.edit', $asu->id) }}"><button class="btn btn-inverse-warning">
                        <i class="fa fa-edit"></i>
                      </button></a>
                    <button class="btn btn-inverse-info">
                      <i class="fa fa-eye"></i>
                    </button>
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