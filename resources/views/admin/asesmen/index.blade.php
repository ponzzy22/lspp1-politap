@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<form action="{{ route('asesmen.store') }}" method="post">
    @csrf    
    <div class="card btn-light">
        <div class="card-body">
            <h4 class="card-title">Tambah Assesmen Mandiri</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Assesmen</label>
                            <div class="col-sm-9">                                             
                                <input type="text" class="form-control" name="asesmen">
                                @error('asesmen')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Skema</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-lg"  name="unikom_id">
                                    <option value="" holder>pilih</option>                
                                @foreach ($unikom as $asu)
                                    <option value="{{ $asu->id }}"
                                        @if ($asu->unikom_id == $asu->id)
                                            selected
                                        @endif>{{ $asu->unikom }}
                                    </option> 
                                @endforeach  
                                </select>
                            </div>
                        </div>
                    </div>
                </div>               
            <a href=""><button class="btn btn-inverse-info"><i class="fas fa-save"></i> Simpan</button></a>
        </div>
    </div>
</form><br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="fas fa-cogs">    Input Assesmen Mandiri</i></h4>
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
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 0.4219px;">#</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 209.75px;">Assesmen</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 47.5469px;">Unit Kompetensi</th>
                  <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 37.5469px;">Action</th>
              </thead>
              <tbody>
                @foreach ($asesmen as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $loop->iteration }}</td>
                  <td>{{ $asu->asesmen }}</td>  
                  <td>{{ $asu->unikom->unikom }}</td>                
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

@endsection