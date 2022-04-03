@extends('layout/3')
@section('isi')
@include('layout/verifikasi')

<div class="card">
    <div class="card-body">
    <h4 class="card-title">Lengkapi Profile Anda</h4>
    <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data" class="form-sample">
        @csrf
        @method('put')
        <p class="card-description">
            info Personal 
        </p>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">                                             
                        <input type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->name) }}">
                        @error('name')
                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="number" maxlength="25" class="form-control" name="email" value="{{ old('email', Auth::user()->email) }}">
                        @error('email')
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
                        @error('tgl_lahir')
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
                <input type="text" class="form-control">
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
                <input type="text" class="form-control">
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
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <p class="card-description">
            Upload Identitas Personal
        </p>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <div class="input-group-prepend"> 
                            <input type="file"  name="image" class="form-control">
                            <a href="{{ old('image', Auth::user()->image) }}" target="_blank" class="btn btn-info"><i class="fas fa-download"></i></a>                         
                        </div><br>
                        <embed src="{{ old('image', Auth::user()->image) }}"  type="application/pdf">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kartu Tanda Mahasiswa</label>
                    <div class="col-sm-9">
                        <div class="input-group-prepend"> 
                            <input type="file"  name="ktm" class="form-control">
                            <a href="{{ old('ktm', Auth::user()->ktm) }}" target="_blank" class="btn btn-info"><i class="fas fa-download"></i></a>                         
                        </div><br>
                        <embed src="{{ old('ktm', Auth::user()->ktm) }}"  type="application/pdf">                   </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kartu Tanda Penduduk</label>
                    <div class="col-sm-9">
                        <div class="input-group-prepend"> 
                            <input type="file"  name="ktp" class="form-control">
                            <a href="{{ old('ktp', Auth::user()->ktp) }}" target="_blank" class="btn btn-info"><i class="fas fa-download"></i></a>                         
                        </div><br>
                        <embed src="{{ old('ktp', Auth::user()->ktp) }}"  type="application/pdf">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kartu Hasil Studi</label>
                    <div class="col-sm-9">
                        <div class="input-group-prepend"> 
                            <input type="file"  name="khs" class="form-control">
                            <a href="{{ old('khs', Auth::user()->khs) }}" target="_blank" class="btn btn-info"><i class="fas fa-download"></i></a>                         
                        </div><br>
                        <embed src="{{ old('khs', Auth::user()->khs) }}"  type="application/pdf">                   </div>
                </div>
            </div>
        </div>

        <a href=""><button class="btn btn-inverse-info"><i class="fas fa-save"></i> Simpan</button></a>
    </form>
    </div>
</div>

{{-- <form action="{{ route('profil.update') }}" method="POST">
    @csrf
    @method('put')
    
    <label for="kode">kode</label>
    <input value="{{ old('kode', Auth::user()->kode) }}" type="text" name="kode" id="kode">
    @error('kode')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
    @enderror
    <label for="">password</label>
    <input value="{{ old('name', Auth::user()->name) }}" type="text" name="name" id="kode">

    <label for="">ussername</label>
    <input value="{{ old('email', Auth::user()->email) }}" type="text" name="email" id="kode">

    <label for="">password</label>
    <input  type="text" name="password" id="kode">
    <button type="submit" class="btn btn-inverse-success">update</button>
    </form> --}}

@endsection