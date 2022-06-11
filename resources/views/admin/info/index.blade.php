@extends('layout/admin2')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-info"></i> Informasi Pendaftaran
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informasi Pendaftaran</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- INPUT INFO ----------------------> --}}

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Setting Prosedur Pendaftaran Sertifikasi</h4>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab"
                        aria-controls="home-1" aria-selected="true">Upload Gambar Prosedur Pendaftaran Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab"
                        aria-controls="profile-1" aria-selected="false">Upload Video Tutorial Pendaftaran Sertifikasi</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($info2 as $asu2)
                                <div class="col-md-6">
                                    <form action="{{ route('save_image', $asu2->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label for="file">Input Gambar</label>
                                        <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image" id="file">
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
                </div>
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($info as $asu)
                                <div class="col-md-6">
                                    <form action="{{ route('info.update', $asu->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label for="file">Input Video MP4</label>
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
            </div>
        </div>
    </div>
@endsection
