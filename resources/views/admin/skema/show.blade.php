@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

{{ $skema->skema }} <br>

@forelse ($skema->unikoms as $unitkompetensi)
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>{{ $unitkompetensi->unikom }}</th>
        <th>chehck</th>
        <th>chehck</th>
        <th>upload</th>
    </tr>
    </thead>
    @foreach ($skema->asesmens as $asesmandiri)
    <tbody>
    <tr>
        <td>{{ $unitkompetensi->id }}</td>
        <td>@if ($unitkompetensi->id == $asesmandiri->unikom_id)
                {{ $asesmandiri->asesmen }}                        
            @endif</td>
        <td><input type="checkbox" name="" id=""></td>
        <td><input type="checkbox" name="" id=""></td>
        <td><input type="file" name="" id=""></td>               
    </tr>
</tbody>
    @endforeach
</table>
@empty
    
@endforelse

@endsection