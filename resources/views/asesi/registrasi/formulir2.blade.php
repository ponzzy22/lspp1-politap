@extends('layout/4')
@section('isi')
@include('layout/verifikasi')

<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
         
          <p class="card-description">
            Add class <code>.table</code>              <button style="align-items: center" type="button" class="btn btn-primary btn-sm" data-toggle="popover" title="" data-content="Sed posuere consectetur est at lobortis. Aenean eu leo quam." data-original-title="Popover title" aria-describedby="popover635060">Instruksi</button>

          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Unit </th>
                    <th style="width: 400px">Assesmen</th>
                    <th>Bukti</th>
                    <th>K</th>
                    <th>BK </th>
                </tr>
              </thead>
              @foreach ($skema->asesmens as $asu)              
            <tbody>                
                <tr>
                  <td>{{ $loop->iteration }}</td>
                    <td>{{ $asu->unikom->unikom }}</td>
                    <td>{{ $asu->asesmen }}</td> 
                    <form action="{{ route('xnxx.store') }}" enctype="multipart/form-data" method="post">
                        @csrf   
                        <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="status" value="Kompeten">
                        <input type="hidden" name="skema_id" value="{{ $skema->id }}">
                        <input type="hidden" name="skema_name" value="{{ $skema->skema }}">
                        <td><div class="upload-btn-wrapper">
                          <div class="badge badge-pill badge-outline-warning"><i class="fas fa-cloud-upload-alt"></i></div>
                          <input type="file" name="image" />
                        </div></td>
                    <input type="hidden" name="name" value="{{ $asu->asesmen }}">          
                    <td><button class="btn btn-inverse-info btn-sm" type="submit"><i class="fas fa-check"></i></button></td> 
                  </form>

                  <form action="{{ route('xnxx.store2') }}" method="post">
                  @csrf
                  <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="name" value="{{ $asu->asesmen }}">          
                  <input type="hidden" name="status" value="Tidak Kompeten">
                  <td><button class="btn btn-inverse-danger btn-sm" type="submit"><i class="fas fa-check"></i></button></td> 

                  </form>
                   
                      
               
                </tr>     
            </tbody>            
            @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Hoverable Table</h4>
          <p class="card-description">
            Add class <code>.table-hover</code>
          </p>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Assesmen</th>
                </tr>
              </thead>
              @foreach ($xnxx as $data)
              <tbody>                
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <div class="badge badge-light">{{ $data->status }}</div>
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>
                      <form action="{{ route('xnxx.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
                        @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                      </form>
                    </td>
                  </tr>     
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>    
  </div>


  <div class="card">
    <div class="card-body">
      <form action="{{ route('token.store') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ Auth::user()->id }}{{ $skema->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button class="btn btn-success" type="submit">Selanjutnya</button>
      </form>
  </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('token2.store') }}" method="post">
        @csrf
        <input  type="hidden" name="kode_register" value="{{ Auth::user()->id }}{{ $skema->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input  type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="skema_id" value="{{ $skema->id }}">
        <input  type="hidden" name="skema_name" value="{{ $skema->skema }}">
        <input  type="hidden" name="status" value="Belum di Konfirmasi">
        <button class="btn btn-success" type="submit">Selanjutnya</button>
      </form>
  </div>
  </div>
@endsection