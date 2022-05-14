@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="card" data-aos="zoom-in" data-aos-delay="100">
        <div class="card-body">
            <div class="page-header">
                <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i
                        class="fab fa-pagelines"></i>
                    Layanan</h3>
                <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">
                                <p>beranda</p>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">LAYANAN</li>
                    </ol>
                </nav>
            </div>
            <ul class="nav nav-pills nav-pills-primary" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"><i class="fas fa-edit"></i> Skema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false"><i class="fas fa-building"></i> TUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false"><i class="fas fa-user"></i> Asesor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab"
                        aria-controls="pills-contact2" aria-selected="false"><i class="fas fa-certificate"></i> Pemegang
                        Sertifikat</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <h4 style="padding-left: 2%" class="font-weight-normal">Skema Yang Kami Miliki</h4>
                    <div class="media">
                        <div class="media-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive" data-aos="zoom-in" data-aos-delay="300">
                                            <div id="order-listing_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="order-listing" class="table dataTable no-footer"
                                                            role="grid" aria-describedby="order-listing_info">
                                                            <thead>
                                                                <tr class="bg-primary text-white" role="row">
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">#</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">Action</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Actions: activate to sort column ascending"
                                                                        style="width: 150.141px;">Kode Skema</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Customer: activate to sort column ascending"
                                                                        style="width: 575.75px;">Skema</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Ship to: activate to sort column ascending"
                                                                        style="width: 97.5469px;">Dibuat</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Status: activate to sort column ascending"
                                                                        style="width: 66.1094px;">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($skema as $hasil => $asu)
                                                                    <tr role="row" class="odd">
                                                                        <td>{{ $loop->iteration }}</td>

                                                                        <td class="text-right">
                                                                            <a
                                                                                href="{{ route('uiskema.show', $asu->id) }}"><button
                                                                                    type="submit"
                                                                                    class="btn btn-inverse-primary btn-sm btn-block"><i
                                                                                        class="fa fa-list "></i> Lihat
                                                                                    Unit
                                                                                </button></a>
                                                                        </td>
                                                                        <td class="">{{ $asu->kode_skema }}
                                                                        </td>
                                                                        <td>{{ $asu->skema }}</td>
                                                                        <td>{{ $asu->created_at }}</td>
                                                                        <td><label
                                                                                class="badge badge-light">{{ $asu->status->status }}</label>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h4 style="padding-left: 2%" class="font-weight-normal"> Fasilitas Uji Kompetensi Yang Tersedia</h4>
                    <div class="media">
                        <div class="media-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th style="width: 1000px">
                                                    TUK
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tuk as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->tuk }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h4 style="padding-left: 2%" class="font-weight-normal"> Asesor</h4>
                    <div class="media">
                        <div class="media-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px">
                                                    #
                                                </th>
                                                <th style="width: 300px">
                                                    Kode Asesor
                                                </th>
                                                <th style="width: 900px">
                                                    Nama Asesor
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asesor as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->nik }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->nama }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                    <h4 style="padding-left: 2%" class="font-weight-normal"> Pemegang Sertifikat</h4>
                    <div class="media">
                        <div class="media-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px">
                                                    #
                                                </th>
                                                <th style="width: 300px">
                                                    Kode Registrasi
                                                </th>
                                                <th style="width: 700px">
                                                    Nama Asesi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sertifikat as $asu)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->id }}
                                                    </td>
                                                    <td>
                                                        {{ $asu->user_name }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
@endsection
