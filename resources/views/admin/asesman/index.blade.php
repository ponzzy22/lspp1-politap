@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<form action="{{ route('asesman.store') }}" method="post">
    @csrf    
    <div class="card btn-light">
        <div class="card-body">
            <h4 class="card-title">Tambah Assesmen Mandiri</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Assesmen</label>
                            <div class="col-sm-9">                                             
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Skema</label>
                            <div class="col-sm-9">
                                <select class="form-control"  name="skema_id">
                                    <option value="" holder>pilih</option>                
                                @foreach ($skema as $asu)
                                    <option value="{{ $asu->id }}"
                                        @if ($asu->skema_id == $asu->id)
                                            selected
                                        @endif>{{ $asu->skema }}
                                    </option> 
                                @endforeach  
                                </select>
                            </div>
                        </div>
                    </div>
                </div>               
            <a href=""><button class="btn btn-inverse-info"><i class="fas fa-save"></i> Simpan</button></a>
        </div>
    </div>
</form>

    
@endsection