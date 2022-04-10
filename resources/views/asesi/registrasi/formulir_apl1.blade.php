@extends('layout/3')
@section('isi')
@include('layout/verifikasi')
    {{ Auth::user()->name }}
    {{ $skema->kode_skema }}
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Lengkapi Profile Anda</h4>
        <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data" class="form-sample">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::user()->id }}{{ $skema->id }}">
            <input type="hidden" name="skema_name" value="{{ $skema->skema }}">
            <input type="hidden" name="skema_id" value="{{ $skema->kode_skema }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}">
            <input type="hidden" name="status" value="Belum di Validasi">
            <p class="card-description">
                info Personal 
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">                                             
                            <input type="text" class="form-control" name="user_name" value="{{ old('name', Auth::user()->name) }}">
                            @error('user_name')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                        <div class="col-sm-9">
                            <input type="number" maxlength="25" class="form-control" name="nim" value="{{ old('email', Auth::user()->email) }}">
                            @error('nim')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="sex_id">
                                <option value="" holder></option>                
                                @foreach ($sex as $result)
                                    <option value="{{ $result->id }}"
                                        @if ( old('sex_id', Auth::user()->sex_id) == $result->id)
                                        selected
                                        @endif>{{ $result->sex }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">                    
                        <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tmpt_lahir" value="{{ old('tmpt_lahir', Auth::user()->tmpt_lahir) }}">
                            @error('tmpt_lahir')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <div class="input-group-prepend">                            
                                <span class="input-group-text">@</span> 
                                <input type="email" class="form-control" name="surel" value="{{ old('surel', Auth::user()->surel) }}">
                                </div>
                                @error('surel')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-9">
                            <div class="input-group-prepend"> 
                                <span class="input-group-text">+62</i></span>
                                <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp', Auth::user()->no_hp) }}">
                            </div>
                            @error('no_hp')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jurusan_id">
                                <option value="" holder></option>                
                                @foreach ($jurusan as $result)
                                    <option value="{{ $result->id }}"
                                        @if ( old('jurusan_id', Auth::user()->jurusan_id) == $result->id)
                                        selected
                                        @endif>{{ $result->jurusan }}
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
                    <label class="col-sm-3 col-form-label">Semester</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="semester_id">
                                <option value="" holder></option>                
                                @foreach ($semester as $result)
                                    <option value="{{ $result->id }}"
                                        @if ( old('semester_id', Auth::user()->semester_id) == $result->id)
                                        selected
                                        @endif>{{ $result->semester }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    
            <p class="card-description">
              Info Alamat
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Provinsi</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi', Auth::user()->provinsi) }}">
                      </div>
                    </div>
                  </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat Sesuai KTP</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}">
                    @error('alamat')
                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kabupaten</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="kabupaten">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Post</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control"  name="kode_post" value="{{ old('kode_post', Auth::user()->kode_post) }}">
                    @error('kode_post')
                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                </div>
            </div>
              
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kecamatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="kecamatan">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Warga Negara</label>
                        <div class="col-sm-9">
                            <input type="text" maxlength="20" class="form-control" name="negara" value="{{ old('negara', Auth::user()->negara) }}">
                            @error('negara')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kota">
                        </div>
                    </div>
                </div>
            </div>
    
            <button class="btn btn-inverse-info" onclick="showSwal('success-message')"><i class="fas fa-save"></i>Simpan</button> 

    
            {{-- <button class="btn btn-inverse-info"><i class="fas fa-save"></i> Simpan</button> --}}
        </form><br>
        <a href="{{ route('xnxx.show', $skema->id) }} }}"><button class="btn btn-inverse-success"><i class="fas fa-save"></i> Selanjutnya</button></a>
        </div>
    </div>
@endsection