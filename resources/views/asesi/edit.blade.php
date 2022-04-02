@extends('layout/3')
@section('isi')
@include('layout/verifikasi')

<form action="{{ route('profil.update') }}" method="POST">
    @csrf
    @method('put')
    
    <label for="kode">kode</label>
    <input value="{{ old('kode', Auth::user()->kode) }}" type="text" name="kode" id="kode">
    @error('kode')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
    @enderror
    <label for="">password</label>
    <input value="{{ old('name', Auth::user()->name) }}" type="text" name="name" id="kode">

    <label for="">ussername</label>
    <input value="{{ old('email', Auth::user()->email) }}" type="text" name="email" id="kode">

    <label for="">password</label>
    <input  type="text" name="password" id="kode">
    <button type="submit" class="btn btn-inverse-success">update</button>
    </form>

@endsection