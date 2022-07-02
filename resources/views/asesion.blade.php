@extends('layout/asesi1')
@section('judul')
    LSP P1-POLITAP | ASESI
@endsection
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-user"></i> Welcome, {{ Auth::user()->name }}
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-black font-weight-bold">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div><br>

    <div class="row">
        <div class="card col-md-7">
            <div class="card-body">
                <div class="card-title">
                    <h4>Instruksi Pendaftaran Sertifikasi Skema</h4>
                </div>
                <hr>
                <ol>
                    <li class="font-weight-bold">Sebelum mendaftar sertifikasi skema, harap dilengkapi data "Profil Anda"
                        terlebih dahulu.</li>
                    <li class="font-weight-bold">Sebelum mendaftar harap diperhatikan dan dipelajari unit-unit skema yang
                        akan anda dipilih.</li>
                    <li class="font-weight-bold">Setelah itu anda dapat melakukan pendaftaran sertifikasi dengan menekaan
                        tombol "Daftar Sertifkasi" yang terletak disebelah kanan.</li>
                    <li class="font-weight-bold">Jika masih bingun dalam proses mendaftar di aplikasi maka anda dapat memilih tombol
                        bantuan yang ada dibawah ini.</li>
                </ol>
                <button class="btn btn-sm btn-warning"><i class="fas fa-play-circle"></i> Video Tutorial Penggunaan Aplikasi</button>
                <button class="btn btn-sm btn-warning"><i class="fas fa-book-reader"></i> Manual Guide</button>
            </div>
        </div>
<<<<<<< HEAD

=======
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
        <div class="card col-md-5">
            <div class="card-body">
                <div class="card-title">
                    <h4>Daftar Sertifikasi Disini</h4>
                </div>
                <hr>
<<<<<<< HEAD
                <a href="{{ route('profil.edit2') }}"><img src="{{ asset('images/back/1') }}" width="300px" alt=""></a>
=======
                <a href="{{ route('profil.edit2') }}"><img src="{{ asset('images/logo3/daftar-sekarang.png') }}" width="300px" alt=""></a>
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
            </div>
        </div>
    </div>
    <br>

<<<<<<< HEAD
=======
    {{-- <-------------------- PROFIL --------------------> --}}
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <br>
                    {{-- <-------------------- PROFIL --------------------> --}}
                    <div class="d-flex flex-row">
                        @if (Auth::user()->image)
                        <img src="{{ asset(Auth::user()->image) }}" class="img-lg rounded" alt="image">
                        @else
                        <img src="{{ asset('images/back/photo.png') }}" class="img-lg rounded" alt="image">
                        @endif
                        <div class="ml-3">
                            <h6 class="text-danger font-weight-bold">{{ Auth::user()->name }}</h6>
                            <p class="text-black font-weight-bold">NIM :
                                {{ Auth::user()->email }}</p>
                            <p class="text-black font-weight-bold">Mahasiswa Politeknik Negeri Ketapang</p>
                            <p class="mt-2 text-black font-weight-bold">{{ Auth::user()->jurusan->jurusan }}</p>
                            <p class="text-black font-weight-bold"><i class="fas fa-envelope"></i>
                                {{ Auth::user()->email2 }}</p>
                            <a href="{{ route('koleksi.sertifikat') }}">
                                <p class="text text-black font-weight-bold"> <i
                                        class="fas fa-certificate text-black font-weight-bold"></i> Koleksi Sertifikat:
                                    {{ $datasertifikat }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- <-------------------- LENGKAPI DATA PENDAFTARAN --------------------> --}}
        @foreach ($datareg as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a style="padding-left: 0%" href="{{ route('registrasi.show', Crypt::encryptString($asu->id)) }}"><button
                                class="btn btn-success btn-rounded btn-sm">
                                <i class="fas fa-play-circle"></i> Lanjutkan Pengisian Data Pendaftaran Anda </button></a>
                        {{-- <a href="{{ route('formulirapl2edit', $asu->id) }}"><button
                                class="btn btn-success btn-rounded btn-sm"><i class="fas fa-upload"></i>
                                Upload Data Formulir APL-02</button></a> --}}
                        {{-- <button type="button" class="btn btn-info btn-sm btn-rounded" data-toggle="modal"
                            data-target="#exampleModal-{{ $asu->id }}"><i class="fas fa-flag-checkered"></i> Kirim Data Pendaftaran </button> --}}
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-trash "></i> Hapus
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan:</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- MENUNGGU VALIDASI --------------------> --}}
        @foreach ($datareg1 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('rekap_pendaftaran', $asu->id) }}"><button
                                class="btn btn-info btn-rounded btn-sm"><i class="fa fa-book "></i> Rekap Pendaftaran
                            </button></a>
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-eraser "></i> Batalkan Pendaftaran
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan: </small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- PENDAFTARAN DITOLAK --------------------> --}}
        @foreach ($datareg3 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a style="padding-left: 0%" href="{{ route('data_edit_tolak', $asu->id) }}"><button
                                class="btn btn-success btn-rounded btn-sm">
                                <i class="fas fa-edit"></i> Perbaiki Data Formulir APL-01 </button></a>
                        <div class="btn btn-warning btn-rounded btn-sm" data-toggle="modal"
                            data-target="#exampleModal2-{{ $asu->id }}"><i class="fa fa-info-circle "></i> Info
                        </div>
                        <div class="btn btn-danger btn-rounded btn-sm" data-toggle="modal"
                            data-target="#datareg-{{ $asu->id }}"><i class="fa fa-trash "></i> Hapus
                        </div>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Keterangan: {!! $asu->keterangan !!}</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- BERHASIL DIVALIDASI --------------------> --}}
        @foreach ($datareg2 as $asu)
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('rekap_pendaftaran', $asu->id) }}"><button
                                class="btn btn-info btn-rounded btn-sm"><i class="fa fa-book "></i> Rekap Pendaftaran
                            </button></a>
                        <a href="{{ route('info_sertifikasi', $asu->id) }}"><button
                                class="btn btn-warning btn-rounded btn-sm"><i class="fa fa-info-circle "></i> Informasi
                                Sertifikasi
                            </button></a>
                    </div><br>
                    <div class="row">
                        <h4 class="card-title mb-0">{{ $asu->skema_name }}</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">#{{ $asu->id }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-calendar text-muted"></i>
                                    <small class=" ml-1 mb-0">{{ $asu->date }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Waktu {{ $asu->time }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-user text-muted"></i>
                                    <small class=" ml-1 mb-0">Asesor: {{ $asu->asesor->nama }}</small>
                                </div>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-map text-muted"></i>
                                    <small class=" ml-1 mb-0">Lokasi: {{ $asu->tuk->tuk }}</small>
                                </div>
                            </div><br>
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="fas fa-circle-notch text-muted"></i>
                                    <small class=" ml-1 mb-0">Skema dalam proses sertifikasi</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            {!! $asu->status !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <-------------------- SERTIFIKAT --------------------> --}}
        <!-- @foreach ($datareg4 as $asu)
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="btn btn-warning btn-rounded btn-sm" data-toggle="modal"
                            data-target="#exampleModal2z-{{ $asu->id }}"><i class="fa fa-info-circle "></i> Info
                        </div>
                    <div class="d-flex flex-row">
                        <img src="../images/faces/face11.html" class="img-lg rounded" alt="profile image">
                        <div class="ml-3">
                            <h6>Maria</h6>
                            <p class="text-muted">maria@gmail.com</p>
                            <p class="mt-2 text-primary font-weight-bold">{{ $asu->skema_name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach -->
    </div><br>




    {{-- <--------------- FOOTER ---------------> --}}

    <div class="card col-md-12">
        <div class="card-body">
            <h6 class="badge  badge-outline-info font-weight-bold">Kontak Admin LSP-POLITAP</h6>
            <br><br>
            <p style="font-size: 20px"><i class="fab fa-whatsapp-square"> 08965386474683</i></p>
            <p style="font-size: 20px"><i class="fas fa-envelope-square"> lsp@politap.ac.id</i></p>
        </div>
    </div>

    {{-- <--------------- MODAL HAPUS LENGKAPI DATA ---------------> --}}
    @foreach ($datareg as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL HAPUS Menunggu Validasi... ---------------> --}}
    @foreach ($datareg1 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

{{-- <--------------- MODAL SERTIFIKASI ---------------> --}}
    @foreach ($datareg4 as $asu)
        <div class="modal fade" id="exampleModal2z-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        OK
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.update', $asu->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="status" value="selesai">
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <--------------- MODAL HAPUS Pendaftaran Ditolak... ---------------> --}}
    @foreach ($datareg3 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('registrasi.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-trash "></i> Hapus
                                Pendaftaran</button>

                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL INFO ---------------> --}}
    @foreach ($datareg3 as $data)
        <div class="modal fade" id="exampleModal2-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Info dari Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $data->keterangan !!}
                    </div>
                    <div class="modal-footer">
                        <i class="fas fa-flag-checkered"></i></button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
