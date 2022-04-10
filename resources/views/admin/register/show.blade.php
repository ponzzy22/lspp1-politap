@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<li>{{ $validasi->id }}</li>
<li>{{ $validasi->skema_name }}</li>

@foreach ($validasi->xnxxes as $xnxx)
   <li> {{ $xnxx->status }}</li>
   <a href="{{ asset($xnxx->image) }}" target="_blank" class="btn btn-info"><i class="fas fa-download"></i></a>                         
   <embed src="{{ asset($xnxx->image) }}"  type="application/pdf">

@endforeach

@endsection