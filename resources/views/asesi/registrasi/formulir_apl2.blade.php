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
    @foreach ($skema->asesmens as $asu)
    <tbody>
    <tr>
        <td>{{ $asu->unikom->unikom }}</td>
        <td>
                {{ $asu->asesmen }}                        
            </td>
        <td><input type="checkbox" name="colorCheckbox" value="red"></td>
        <td><input type="checkbox" name="" id=""></td>
        <td><input type="file" name="" id=""></td>               
    </tr>
</tbody>
    @endforeach
    
</table>  
</div>

<div class="col-md-6">
    <div class="form-group">
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
          Default
        <i class="input-helper"></i></label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
          Selected
        <i class="input-helper"></i></label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled="">
          Disabled
        <i class="input-helper"></i></label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled="" checked="">
          Selected and disabled
        <i class="input-helper"></i></label>
      </div>
    </div>
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