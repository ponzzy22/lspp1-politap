@extends('layout/5')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-upload"></i> Tampilan File
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('file.index') }}">Upload File Dokumen</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tampilan File</li>
            </ol>
        </nav>
    </div><br>
    <div class="card col-md-12">
        <div class="card-body">
            <h4 class="card-title">{{ $file->file }}</h4>
            <embed src="{{ asset($file->image) }}" class="col-md-12" height="500px" type="application/pdf">
            {{-- <img class="card-img-top" src="{{ asset($file->image) }}" alt=""> --}}
            <div class="card-body">
            </div>
        </div>
    </div>
@endsection
