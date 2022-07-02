@extends('layout/admin1')
@section('isi')
    @include('layout/verifikasi')

    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div style="background-color: #1363DF" class="card-header" role="tab" id="heading-11">
                <h6 style="background-color: #1363DF" class="mb-0">
                    <a style="background-color: #1363DF" class="collapsed" data-toggle="collapse" href="#collapse-21111111" aria-expanded="true"
                        aria-controls="collapse-21111111">
                        KONFIRMASI SERTIFIKASI SELESAI
                    </a>
                </h6>
            </div>
            <div id="collapse-21111111" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('finish.update', $validasi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="status"
                            value="<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>">
                        <input type="hidden" name="kode" value="-">
                        {{-- <input type="hidden" name="id_skema" value="final"> --}}
                        {{-- <input type="hidden" name="id" value="2022{{ $validasi->user_id }}{{$validasi->id_skema }}"> --}}
                        <input type="hidden" name="skema_id"
                            value="{{ $validasi->kode_skema }}{{ $validasi->user_id }}">
                        <input type="hidden" name="date" value="">
                        <input type="hidden" name="time" value="">
                        <input type="hidden" name="asesor_id" value="1">
                        <input type="hidden" name="tuk_id" value="1">
                        <button type="submit" class="btn btn-light btn-block"><i class="fas fa-check-circle"></i>
                            Mahasiswa Sudah Kompeten di Skema {{ $validasi->skema_name }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <label class="text text-primary font-weight-bold">Formulir APL-02 (Print Out) <i class="fas fa-angle-double-right"></i> </label>
                <button class="btn btn-dark btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a target="_blank" href="{{route('jwp1', $validasi->id)}}" ><button type="submit" class="btn btn-inverse-light font-weight-bold btn-sm btn-block"><i class="fa fa-edit "></i> Junior Web Programer</button></a>
                                                            <a target="_blank" href="#" ><button type="submit" class="btn btn-inverse-light font-weight-bold btn-sm btn-block"><i class="fa fa-edit "></i> Designer Grafis Muda</button></a>
                                                        </div>
            </div>
            <div class="col-6">
                <label class="text text-primary font-weight-bold">Formulir APL-02 (Print Out) <i class="fas fa-angle-double-right"></i> </label>
                <button class="btn btn-dark btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a target="_blank" href="{{route('jwp2', $validasi->id)}}" ><button type="submit" class="btn btn-inverse-light font-weight-bold btn-sm btn-block"><i class="fa fa-edit "></i> Junior Web Programer</button></a>
                                                            <a target="_blank" href="{{route('dgm2', $validasi->id)}}" ><button type="submit" class="btn btn-inverse-light font-weight-bold btn-sm btn-block"><i class="fa fa-edit "></i> Designer Grafis Muda</button></a>
                                                        </div>

            </div>
        </div>
    </div>
</div>
        <!-- /////////////////////////////////// -->
        <!-- SISI KIRI  DATA -->
        <!-- /////////////////////////////////// -->
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Identitas Personal</h4>
                            {{-- <div class="border-bottom py-4"> --}}
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            {{-- </div> --}}
                            <div class="border-bottom py-4">
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Nama Asesi &rarr;
                                    </span>
                                    <span class="float-right ">
                                        {{ $validasi->user_name }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Skema &rarr;
                                    </span>
                                    <span class="float-right ">
                                        {{ $validasi->skema_name }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kode Skema &rarr;
                                    </span>
                                    <span class="float-right ">
                                        {{ $validasi->kode_skema }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Email &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->surel }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Tempat Lahir &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->tmpt_lahir }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Tanggal Lahir &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->tgl_lahir }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Jenis Kelamin &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->sex->sex }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kewarganegaraan &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->negara }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Alamat &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->alamat }}
                                    </span>
                                </p>
                                {{-- <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kode Post &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->kode_post }}
                                    </span>
                                </p> --}}
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Nomor Handphone Aktif &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->no_hp }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Jurusan Kuliah &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->jurusan->jurusan }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Semester Kuliah &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->semester->semester }}
                                    </span>
                                </p>
                                {{-- <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Provinsi &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->provinsi }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kabupaten &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->kabupaten }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kota &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->kota }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kecamatan &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->kecamatan }}
                                    </span>
                                </p> --}}<br>
                                <h4 class="card-title"><i class="far fa-id-card "></i> Data Pekerjaan Sekarang</h4>
                                {{-- <div class="border-bottom py-4"> --}}
                                <div class="d-flex">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75"
                                            style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><br>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Institusi &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->institusi }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Jabatan &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->jabatan }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Email (Perusahaan) &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->email3 }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Nomor Telepon &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->telp }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Fax &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->fax }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left text-muted">
                                        Kode Post &rarr;
                                    </span>
                                    <span class="float-right">
                                        {{ $validasi->postal }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <!-- /////////////////////////////////// -->
                        <!-- SISI KANAN DATA -->
                        <!-- /////////////////////////////////// -->
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
                                <button class="btn btn-light text-white">{!! $validasi->status !!}</button>
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                    @foreach ($validasi->upload_files as $asu)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <a class="nav-link active" href="{{ asset($asu->image) }}"
                                                    target="_blank">
                                                    <i class="fas fa-download"></i>
                                                    {{ $asu->name }}
                                                </a>
                                                <img src="{{ asset($asu->image) }}" width="100px" alt="">
                                                {{-- <br> {{ $asu->name }} --}}
                                            </a>
                                        </li>
                                    @endforeach
                            </div>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><br>
                            <h4 class="card-title"><i class="far fa-id-card "></i> Hasil Assesment Mandiri</h4>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 10px">Status</th>
                                            <th style="width: 400px">Elemen</th>
                                            <th style="width: 400px">Lihat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($validasi->xnxxes as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {!! $data->status !!}
                                                </td>
                                                <td>{{ $data->asesmen_name }}</td>
                                                <td>
                                                    @if ($data->image)
                                                        <a href="{{ asset($data->image) }}" target="_blank"
                                                            class="btn btn-info btn-rounded"><i
                                                                class="fas fa-download"></i></a>
                                                    @else
                                                        <p>Kosong</p>
                                                    @endif
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



@endsection
