@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
            <h4 class="card-title"><i class="far fa-id-card "></i> Data Identitas Personal</h4>
              {{-- <div class="border-bottom py-4"> --}}
                <div class="d-flex mb-3">
                  <div class="progress progress-md flex-grow">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="progress progress-md flex-grow">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              {{-- </div> --}}
              <div class="border-bottom py-4">
                <p class="clearfix">
                    <span class="float-left text-muted" >
                        Nama Asesi   &rarr;
                    </span>
                    <span class="float-right ">
                      {{ $validasi->user_name }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted" >
                        Skema   &rarr;
                    </span>
                    <span class="float-right ">
                      {{ $validasi->skema_name }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kode Skema   &rarr;
                    </span>
                    <span class="float-right ">
                      {{ $validasi->skema_id }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Status  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->status }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Email  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->surel }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Tempat Lahir  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->tmpt_lahir }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Tanggal Lahir  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->tgl_lahir }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Jenis Kelamin  &rarr;
                    </span>
                    <span class="float-right">
                      {{-- {{ $validasi->sex->sex }} --}}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kewarganegaraan  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->negara }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Alamat  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->alamat }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kode Post  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->kode_post }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Nomor Handphone Aktif  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->no_hp }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Jurusan Kuliah  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->jurusan->jurusan }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Semester Kuliah  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->semester->semester }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Provinsi  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->provinsi }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kabupaten  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->kabupaten }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kota  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->kota }}
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left text-muted">
                        Kecamatan  &rarr;
                    </span>
                    <span class="float-right">
                      {{ $validasi->kecamatan }}
                    </span>
                </p>
              </div>
              <div class="accordion accordion-multi-colored" id="accordion-7" role="tablist">
                <div  class="card">
                  <div class="card-header" role="tab" id="heading-7">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7" class="">
                        Can I transfer the money from the wallet to my bank account?
                      </a>
                    </h5>
                  </div>
                  <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion-3" style="">
                    <div class="card-body">
                      You can at any time reclaim your money to your bank account that you have registered with us. If there are no registered account, then you can add an account in the ‘Register Bank Account’ page.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="heading-8">
                    <h5 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                        Klik Panel ini jika anda ingin menyetujui form ini..
                      </a>
                    </h5>
                  </div>
                  <div id="collapse-8" class="collapse" role="tabpanel" aria-labelledby="heading-8" data-parent="#accordion-3" style="">
                    <div class="card-body">
                        <form action="{{ route('validasi.update', $validasi->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="status" value="Berhasil di Validasi">
                            <li><label for="">Tanggal</label></li>
                            <input type="date" class="form-control" name="date" style="width: 333px">
                            <li>Waktu</li>
                            <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                                  <input name="time" type="text" class="form-control datetimepicker-input" style="width: 10px" data-target="#timepicker-example">
                                  <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
                                </div>
                              </div>
                            <li>Asesor</li>
                            <select class="form-control" name="asesor_id">
                                <option value="" holder>Pilih Asesor</option>
                                @foreach ($asesor as $result)
                                    <option value="{{ $result->id }}">{{ $result->nama }}</option>
                                    select
                                @endforeach
                            </select>
                            <li>Tempat Uji Kompetensi</li>
                            <select class="form-control" name="tuk_id">
                                <option value="" holder>Pilih Tempat Ui Kompetensi</option>
                                @foreach ($tuk as $result)
                                    <option value="{{ $result->id }}">{{ $result->tuk }}</option>
                                    select
                                @endforeach
                            </select>
                            <li>Keterangan Lain</li>
                            <textarea name="keterangan" class="form-control" id="" cols="36" rows="7"></textarea><br>
                          <button type="submit" class="btn btn-dark"><i class="fas fa-check"></i>  Validasi</button>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="heading-9">
                    <h5 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                       Atau jika ingin menolak, anda bisa klik panel ini..
                      </a>
                    </h5>
                  </div>
                  <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9" data-parent="#accordion-3">
                    <div class="card-body">
                        <form action="{{ route('tolak.update', $validasi->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="status" value="Pendaftaran Ditolak">
                            <input type="hidden" name="date" value="">
                            <input type="hidden" name="time" value="">
                            <input type="hidden" name="asesor_id" value="1">
                            <input type="hidden" name="tuk_id" value="1">

                            <li>Alasan/Keterangan</li>
                            <textarea name="keterangan" class="form-control" id="" cols="36" rows="7"></textarea><br>
                          <button type="submit" class="btn btn-dark"><i class="fas fa-times"></i>  Tolak</button>
                        </form>
                     </div>
                  </div>
                </div>
              </div>





            </div>
            <div class="col-lg-8 pl-lg-5">
              <div class="d-flex justify-content-between">
                <div>
                  <h3>{{ $validasi->user_name }}</h3>
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0 mr-2 text-muted">Kode Registrasi:
                        <h4>#{{ $validasi->id }}</h4>

                    </h5>
                     </div>
                </div>

                <button class="btn btn-inverse-primary">{{ $validasi->status }}</button>
                <h4 class="card-title"></h4>


              </div>
              <div class="mt-4 py-2 border-top border-bottom">
                <ul class="nav profile-navbar">

                    @foreach ($validasi->upload_files as $asu)
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <a class="nav-link active" href="{{ asset($asu->image) }}" target="_blank">
                            <i class="fas fa-download"></i>
                            {{ $asu->name }}
                          </a>
                      <img src="{{ asset($asu->image) }}" width="100px" alt="">
                         {{-- <br> {{ $asu->name }} --}}
                  </a>
              </li>
                    @endforeach
              </div><br>
              <h4  class="card-title"><i class="far fa-id-card "></i> Hasil Assesment Mandiri</h4>
              <div class="mt-4 py-2 border-top border-bottom">
                <table class="table table-hover">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Status</th>
                          <th>Assesmen</th>
                      </tr>
                    </thead>
                    @foreach ($xnxx as $data)
                    <tbody>
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>
                            <div class="badge badge-dark">{{ $data->status }}</div>
                          </td>
                          <td>{{ $data->unikom_name }}</td>
                          <td>
                            <a href="{{ asset($data->image) }}" target="_blank" class="btn btn-info btn-rounded"><i class="fas fa-download"></i></a>

                          </td>
                        </tr>
                    </tbody>
                    @endforeach
                  </table>
              </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <button class="btn btn-primary trigger--fire-modal-1" id="modal-1"></button>
  <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title"></h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true"></span>             </button>           </div>           <div class="modal-body">           </div>         </div>

@endsection
