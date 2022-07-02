@extends('layout/admin2')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-info"></i> Informasi Pendaftaran
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informasi Pendaftaran</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- INPUT INFO ----------------------> --}}



    <div class="row">
        <div class="card col-md-6">
            <div class="card-body">
                @foreach ($info2 as $asu2)
                    <div class="col-md-6">
                        <form action="{{ route('save_image', $asu2->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label class="font-weight-bold text-primary" for="file"><i class="fas fa-images"></i> Input Gambar Informasi Pendaftaran</label>
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image"
                                id="file">
                            <br>
                            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                                Update</button><br>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset($asu2->image) }}" width="550px" alt="">
                    </div><br>
                @endforeach
            </div>
        </div>
        <div class="card col-md-6">
            <div class="card-body">
                @foreach ($info as $asu)
                    <div class="col-md-6">
                        <form action="{{ route('info.update', $asu->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label class="font-weight-bold text-primary" for="file"><i class="fas fa-images"></i> Input Video MP4</label>
                            <input type="file" class="form-control" accept=".mp4" name="image" id="file">
                            <br>
                            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                                Update</button><br>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <video src="{{ asset($asu->image) }}" width="550px" alt="">
                    </div><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
