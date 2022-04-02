@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<!-- /////////////////////////////////// -->
{{-- EDIT SKEMA --}}
<!-- /////////////////////////////////// -->
<div class="card">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('skema.update', $skema->id) }}" method="POST" class="form-sample">
              @csrf
              @method('patch')
                <div class="card-description text-right">
                  <button type="submit" class="btn btn-success btn-icon-text">
                    <i class="fa fa-plus btn-icon-prepend"></i>
                    Tambahkan
                  </button>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Skema</label>
                      <div class="col-sm-9">
                        <input type="text" name="skema" class="form-control" value="{{ $skema->skema }}" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kode Skema</label>
                      <div class="col-sm-9">
                        <input type="text" name="kode" class="form-control" value="{{ $skema->kode }}"/>
                      </div>
                    </div>
                  </div>                
                </div>
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Prodi</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="prodi_id">
                            <option value="" holder>pilih</option>                
                            @foreach ($prodi as $result)
                                <option value="{{ $result->id }}"
                                    @if ($skema->prodi_id == $result->id)
                                        selected
                                    @endif>{{ $result->prodi }}
                                </option> 
                            @endforeach  
                        </select>    
                      </div>
                    </div>
                  </div>   
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Asesor</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="asesor_id">
                            <option value="" holder>pilih</option>                
                            @foreach ($asesor as $result)
                                <option value="{{ $result->id }}"
                                    @if ($skema->asesor_id == $result->id)
                                        selected
                                    @endif>{{ $result->nama }}
                                </option> 
                            @endforeach  
                        </select>     
                      </div>
                    </div>
                  </div>  
                </div>   
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tempat Uji Kompetensi</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="tuk_id">
                            <option value="" holder>pilih</option>                
                            @foreach ($tuk as $result)
                                <option value="{{ $result->id }}"
                                    @if ($skema->tuk_id == $result->id)
                                        selected
                                    @endif>{{ $result->tuk }}
                                </option> 
                            @endforeach  
                        </select>   
                      </div>
                    </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="status_id">
                            <option value="" holder>pilih</option>                
                            @foreach ($status as $result)
                                <option value="{{ $result->id }}"
                                    @if ($skema->status_id == $result->id)
                                        selected
                                    @endif>{{ $result->status }}
                                </option> 
                            @endforeach  
                        </select>     
                      </div>
                    </div>
                  </div>  
                </div>
              </form>
        </div>
    </div>
</div>

@endsection