@extends('layout/2')
@section('isi')
    @foreach ($skema as $asu)
    <a href="{{ route('show_kluster', $asu->id ) }}"><h1>{{ $asu->skema }}</h1></a>
    
    @endforeach


@endsection