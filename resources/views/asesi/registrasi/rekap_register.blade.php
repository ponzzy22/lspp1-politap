@extends('layout/3')
@section('isi')
@foreach ($register as $asu)
<div class="col-12 col-md-6 col-lg-6">
  <div class="card card-secondary">
    <div class="card-header">
      <h4>Card Header</h4>
      <div class="card-header-action">
        <a href="#" class="btn btn-primary">View All</a>
        <form action="{{ route('register.destroy', $asu->id) }}" method="POST" onsubmit="return confirm('Apa anda yakin akan menghapus Artikel ini (Yakinkan lah aku)')">
          @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
    <div class="card-body">
      <li>{{ $asu->kode_register }}</li>
      <li>{{ Auth::user()->name }}</li>
      <li>{{ $asu->skema_name }}</li>
      <li>{{ $asu->created_at }}</li>
    </div>
  </div>
</div><br><br>
@endforeach

@foreach ($xnxx as $asu)
    <embed src="{{ asset($asu->image) }}" type="application/pdf">
@endforeach

@endsection