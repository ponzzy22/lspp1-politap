@extends('layout/1')
@include('layout/verifikasi')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}

    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="card">
        <div class="card-body" style="background-image: url('#')">
            <div class="page-header">
                <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i
                        class="fas fa-info-circle"></i>
                    Informasi Pendaftaran </h3>
                <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">
                                <p>beranda</p>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">INFORMASI PENDAFTARAN </li>
                    </ol>
                </nav>
            </div>
            <ul class="nav nav-pills nav-pills-info" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true" data-aos="fade-up" data-aos-delay="200">Tutorial
                        Pendaftaran Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false" data-aos="fade-up" data-aos-delay="200">Download
                        Dokumen</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @foreach ($info as $asu)
                        <div class="media">
                            <video width="1000px" controls>
                                <source src="{{ asset($asu->image) }}" type="video/mp4">
                            </video>
                            {{-- <div class="media-body" data-aos="fade-left" data-aos-delay="200">
                                <p class="text text-white" data-aos="fade-left" data-aos-delay="200">
                                    {!! $asu->keterangan !!}
                                </p>
                            </div> --}}
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="media">
                        {{-- <img class="mr-3 w-25 rounded" src="http://www.urbanui.com/" alt="sample image"> --}}
                        <div class="media-body">
                            {{-- <---------------------- UPLOAD FILE ----------------------> --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="row grid-margin">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <div id="order-listing_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="order-listing_wrapper"
                                                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="dataTables_length"
                                                                            id="order-listing_length"><label>Show <select
                                                                                    name="order-listing_length"
                                                                                    aria-controls="order-listing"
                                                                                    class="form-control">
                                                                                    <option value="5">5</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="-1">All</option>
                                                                                </select> entries</label></div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div id="order-listing_filter"
                                                                            class="dataTables_filter"><label><input
                                                                                    type="search" class="form-control"
                                                                                    placeholder="Search"
                                                                                    aria-controls="order-listing"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <table id="order-listing"
                                                                            class="table dataTable no-footer" role="grid"
                                                                            aria-describedby="order-listing_info">
                                                                            <thead>
                                                                                <tr class="bg-primary text-white"
                                                                                    role="row">
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="order-listing"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Order #: activate to sort column ascending"
                                                                                        style="width: 10.4219px;">#</th>
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="order-listing"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Order #: activate to sort column ascending"
                                                                                        style="width: 10.4219px;">Action
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="order-listing"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Actions: activate to sort column ascending"
                                                                                        style="width: 700.141px;">Nama File
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="order-listing"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Ship to: activate to sort column ascending"
                                                                                        style="width: 97.5469px;">Dibuat
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($file as $hasil => $asu)
                                                                                    <tr role="row" class="odd">
                                                                                        <td>{{ $loop->iteration }}</td>

                                                                                        <td class="text-right">
                                                                                            <a href="{{ $asu->image }}"><button
                                                                                                    class="btn btn-inverse-dark btn-sm"
                                                                                                    type="button"
                                                                                                    id="dropdownMenuSizeButton3">
                                                                                                    <i
                                                                                                        class="fa fa-file-download"></i>
                                                                                                </button></a>
                                                                                        </td>
                                                                                        <td class="">
                                                                                            {{ $asu->file }}</td>
                                                                                        <td>{{ $asu->created_at }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-5">
                                                                        <div class="dataTables_info" id="order-listing_info"
                                                                            role="status" aria-live="polite">Showing 0 to 0
                                                                            of 0 entries</div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <div class="dataTables_paginate paging_simple_numbers"
                                                                            id="order-listing_paginate">
                                                                            <ul class="pagination">
                                                                                <li class="paginate_button page-item previous disabled"
                                                                                    id="order-listing_previous"><a href="#"
                                                                                        aria-controls="order-listing"
                                                                                        data-dt-idx="0" tabindex="0"
                                                                                        class="page-link">Previous</a>
                                                                                </li>
                                                                                <li class="paginate_button page-item next disabled"
                                                                                    id="order-listing_next"><a href="#"
                                                                                        aria-controls="order-listing"
                                                                                        data-dt-idx="1" tabindex="0"
                                                                                        class="page-link">Next</a></li>
                                                                            </ul>
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
                                </div>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
@endsection
