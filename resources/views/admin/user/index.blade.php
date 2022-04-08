@extends('layout/2')
@section('isi')
@extends('layout/verifikasi')
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
                    <tr class="bg-light text-black" role="row">
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 0.4219px;">#</th>
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 5.75px;">Photo</th>
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 207.5469px;">Nama</th>
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Role</th>
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Bergabung</th>
                      <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 60.141px;">Actions</th>
                                      </tr>
                  </thead>
              <tbody>
                @foreach ($user as $hasil => $asu)
                <tr role="row" class="odd">
                  <td class="">{{ $loop->iteration }}</td>
                  <td class="py-1" style="align-content: right">
                    <img src="{{ asset($asu->image) }}" alt="image">    
                  </td>
                  <td>{{ $asu->name }}</td>
                  <td>{{ $asu->role }}</td>
                  <td>{{ $asu->created_at }}</td>
                  <td class="text-right">                    
                      <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <a class="dropdown-item" href="#">Assesmen Mandiri</a>
                      </div>
                    <a href="{{ route('user.edit', $asu->id) }}"><button class="btn btn-inverse-warning">
                      <i class="fa fa-edit"></i>
                    </button></a>
                    <a href=""><button class="btn btn-inverse-warning">
                      <i class="fa fa-info"></i>
                    </button></a>
                    <a href="{{ route('user.show', $asu->id) }}"><button class="btn btn-inverse-info">
                      <i class="fa fa-eye"></i>
                    </button></a>
                    <form action="{{ route('user.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
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