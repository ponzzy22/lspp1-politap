@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- TAMPIL SKEMA --}}
<!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Skema/Klaster {{ $skema }}</h4>
            <p class="card-description">
            Kode Skema =><code class="text-info">{{ $kode }}</code>
            <br>Prodi =><code class="text-info">{{ $prodi }}</code>
            <br>Asesor =><code class="text-info">{{ $asesor }}</code>
            <br>TUK =><code class="text-info">{{ $tuk }}</code>
            <br>Status =><code class="text-info">{{ $status }}</code>
            <br>Jumlah =><code class="text-info">{{ $count }}</code>
        </p>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 60.141px;">#</th>
                        <th style="width: 250.141px;">Kode Unit</th>
                        <th>Unit Kompetensi</th>              
                    </tr>
                </thead>
                @foreach ($asesmans as $unikom)
                <tbody>                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $unikom->name }}</td>
                        <td>{{ $unikom->unikom }}</td>
                    </tr>                                                      
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

{{-- <ul>
  @foreach ($skema as $asu)
      <li><a href="">{{ $asu->skema }} <span>{{ $asu->unikom->count() }}</span> </a></li>
  @endforeach
</ul> --}}

@endsection