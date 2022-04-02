@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">    
    <div class="card">
        <div class="card-header" role="tab" id="heading-11">
        <h6 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true" aria-controls="collapse-11"> 
                &plus; Klik ini Untuk Tambah Unit Kompetensi 
            </a>
        </h6>
        </div>
        <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
            <div class="card-body">
            <form action="{{ route('unikom.store') }}" method="POST" class="form-inline">
                @csrf
                <label class="sr-only" for="inlineFormInputName2"></label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="kode" placeholder="Kode Unit">
                
                <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="unikom" placeholder="Nama Unit Kompetensi">
                </div>
                
                <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
                <div class="input-group mb-2 mr-sm-2">
                    <select class="form-control form-control-lg" name="skema_id">
                        <option value="" holder>Pilih Skema</option>
                        @foreach ($skema as $result)
                            <option value="{{ $result->id }}">{{ $result->skema }}</option> 
                            select
                        @endforeach           
                    </select>   
                </div>                
                <button type="submit" class="btn btn-success mb-2"><i class="fas fa-save">  Simpan</i></button>
            </form>    
            </div>
        </div>
    </div>
</div>
    
@endsection