@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Setting Banner
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item">
                <a href="#"> </a>
            </li> --}}
                <li class="breadcrumb-item active" aria-current="page">Setting Banner</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- MAIN WEBSITE --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Setting Banner</h4>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab"
                        aria-controls="home-1" aria-selected="true">Skema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab"
                        aria-controls="profile-1" aria-selected="false">TUK</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($skema as $asu)

                                <div class="col-md-6">
                                    <form action="{{ route('sett-beranda.update', $asu->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label for="file">Input Gambar</label>
                                        <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg" id="file">
                                        <br>
                                        <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                                            Update</button><br>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset($asu->image) }}" width="550px" alt="">
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($tuk as $asu)
                            <div class="col-md-6">
                                <form action="{{ route('sett-beranda.update', $asu->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <label for="file">Input Gambar</label>
                                    <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg" id="file">
                                    <br>
                                    <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                                        Update</button><br>
                                </form>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset($asu->image) }}" width="550px" alt="">
                            </div><br>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
