@extends('layout/3')
@section('isi')
@include('layout/verifikasi')
<div class="">
    
<table class="table table-bordered">
    <thead>
        
    <tr>
        <th>uNIT kOMPETENSI</th>
        <th>chehck</th>
        <th>chehck</th>
        <th>upload</th>
    </tr>
    </thead>
    <form action="{{ route('registrasi.store', $skema->id) }}" method="post">
    @csrf
    @foreach ($skema->asesmens as $asu)
    <tbody>
    <tr>
        <td>{{ $asu->unikom->unikom }}</td>
        <td>
                {{ $asu->asesmen }}                        
            </td>
        <td><input type="checkbox" name="echo" value="{{ $asu->asesmen }}"></td>
        <td><input type="text" name="image" value=""></td>
        <td><input type="text" name="" id=""></td>               
    </tr>
</tbody>

    @endforeach
    
</table> 
<button type="submit">tambah</button>
</form> 
</div>


{{-- <div> --}}
    {{-- <label><input type="checkbox" name="colorCheckbox" value="red"> red</label>
    <label><input type="checkbox" name="colorCheckbox" value="green"> green</label>
    <label><input type="checkbox" name="colorCheckbox" value="blue"> blue</label>
</div>
<br><br> <label>bapakkau asu</label>
<div class="red box"><input type="file"></div>
<div class="green box">You have selected <strong>green checkbox</strong> so i am here</div>
<div class="blue box">You have selected <strong>blue checkbox</strong> so i am here</div> --}}

@endsection