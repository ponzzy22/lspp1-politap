@extends('layout/admin2')
@section('isi')
@include('layout/verifikasi')
{{-- <---------------------- PAGE HEADER ----------------------> --}}
<div class="page-header">
    <h3>
        <i class="fas fa-edit"></i> Edit Catatan
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-danger">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('note.index') }}">Catatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Catatan</li>
        </ol>
    </nav>
</div><br>
    {{-- <---------------------- TAMBAH CATATAN ----------------------> --}}
    <form action="{{ route('note.update', $note->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card col-md-12">
            <div class="card-body">
                <label for="judul">Judul</label>
                <input type="text" value="{{ $note->judul }}" class="form-control" id="judul" placeholder="Tulis Judul disini" name="judul" maxlength="30">
                <br>
                <label for="isi">Catatan</label>
                <textarea name="isi" class="summernote" id="isi" cols="1000" rows="2">{{ $note->isi }}</textarea>
                <br>
                <button class="btn btn-info btn-block" type="submit"><i class="fas fa-save"></i> Update</button>
            </div>
        </div>
        </form>
@endsection
