@extends('layout/2')
@section('isi')

<a href=""><h1>{{ $skema->skema }}</h1></a>
<a href="{{ route('detail', $unikom->skema->slug) }}"><label for="">{{ $skema->skema }}</label></a>
<a href="{{ route('detail', $unikom->skema->skema) }}"><label for="">{{ $skema->skema }}</label></a><br>

<a href="{{ route('for_apl2', $asesman->skema->skema) }}">formulir apl2</a>


{{-- <div class="card">
    <div class="card-body">
        <h4 class="card-title">Skema/Klaster {{ $skema->skema }}</h4>
            <p class="card-description">
            Kode Skema =><code class="text-info">{{ $skema->kode }}</code>
            <br>Prodi =><code class="text-info">{{ $skema->prodi->prodi }}</code>
            <br>Asesor =><code class="text-info">{{ $skema->asesor->nama }}</code>
            <br>TUK =><code class="text-info">{{ $skema->tuk->tuk }}</code>
            <br>Status =><code class="text-info">{{ $skema->status->status }}</code>
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
                <tbody>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td>jjjj</td>
                    </tr>  
                                                     
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

{{-- <ul>
    @foreach ($skema as $asu)
        <li><a href="">{{ $asu->skema }} <span>{{ $asu->unikom->count }}</span> </a></li>
    @endforeach
  </ul> --}}
@endsection