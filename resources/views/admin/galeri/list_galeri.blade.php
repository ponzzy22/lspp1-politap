@extends('layout/5')
@section('isi')
@include('layout/verifikasi')
<!-- /////////////////////////////////// -->
{{-- TAMBAH UJIKOM --}}
<!-- /////////////////////////////////// -->
<div class="page-header">
    <h4>
        <i class="fas fa-image"></i>  Galeri Foto
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
            <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri Foto</li>
        </ol>
    </nav>
</div>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH DATA -->
    <!-- /////////////////////////////////// -->
    <div class="col-md-4">
        <div class="mt-4">
            <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="heading-10">
                    <h6 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-10" aria-expanded="false" aria-controls="collapse-10" class="collapsed">
                        Tambah Album Baru
                        </a>
                    </h6>
                    </div>
                    <div id="collapse-10" class="collapse" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4" style="">
                    <div class="card-body">
                        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="galeri" class="form-control" value="">
                            <button class="btn btn-inverse-success btn-sm btn-block" type="submit"><i class="fas fa-save"></i></button>
                        </form>                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->

    <div class="row">
        @foreach ($galeri as $asu)
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>   {{ $asu->galeri }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <a href="{{ route('galeri.show', $asu->id) }}"><button class="btn btn-inverse-info btn-sm btn-block"><i class="fa fa-eye "></i>  Lihat & Edit Galeri  {{ $asu->galeri }}</button></a>
                        <form action="{{ route('galeri.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                            @csrf
                            @method('delete')
                            <a href=""><button type="submit" class="btn btn-inverse-danger btn-sm btn-block"><i class="fa fa-trash "></i>  Hapus Album  {{ $asu->galeri }}</button></a>
                        </form>
                    </div>
                </div>                  
            </div>
        </div><br>
        @endforeach 
    </div>
    

@endsection