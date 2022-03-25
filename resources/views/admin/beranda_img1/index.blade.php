@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="page-header">
    <h3>
    <i class="fas fa-cogs"></i> SETTINGAN HALAMAN BERANDA
    </h3>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
            <li class="breadcrumb-item"><a href="#">Setting-Beranda </a></li>
            <li class="breadcrumb-item">
                <a href="#"> </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div><br>



<div class="card">
  <div class="card-body">
    <div class="card-title">
      
      <form action="{{ route('beranda_img1.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
            <label>Gambar Slide Banner</label>
            <input type="text" name="keterangan">
            <input type="file" class="form-control" name="image">
        
            <div class="form-action">
              <button type="submit" class="btn btn-primary btn-icon-text">
                <i class="far fa-check-square btn-icon-prepend"></i>
                Update
              </button>
            </div>
        </form>
    </div>
  </div>
</div>


  <div class="card">
    <div class="card-body">
      <div class="card-title">
        
        

    
              
        
          {{-- <div id="lightgallery" class="row lightGallery">
            @foreach ($beranda_img1 as $asu)
            <input type="file" name="image">
            <a href="#" class="image-tile"><img src="{{ asset($asu->image) }}" alt="image small"></a>
            @endforeach 
          </div> --}}

          <div class="card-columns">
            @foreach ($beranda_img1 as $asu)
            <div class="card">
              <img class="card-img-top" src="{{ asset($asu->image) }}" alt="Card image cap">
              <div class="card-body">

                <form action="{{ route('beranda_img1.update', $asu->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('patch')
                  <input type="text" name="keterangan">
                <input type="file" class="form-control" name="image">
                <div class="form-action">
                  <button type="submit" class="btn btn-primary btn-icon-text">
                    <i class="far fa-check-square btn-icon-prepend"></i>
                    Update
                  </button>
                </div>
              </form>

                <p class="card-text">{{ $asu->keterangan }}</p>
              </div>
            </div>
            @endforeach 
          </div>
          
        
      </div>
    </div>
  </div>

  
  
@endsection