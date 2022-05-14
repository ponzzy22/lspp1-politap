@extends('layout/1')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i
                class="fas fa-file-archive"></i>
            File Dokumen</h3>
        <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">File Dokumen</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- UPLOAD FILE ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <div class="row grid-margin">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="order-listing_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="order-listing_length"><label>Show <select
                                                            name="order-listing_length" aria-controls="order-listing"
                                                            class="form-control">
                                                            <option value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="-1">All</option>
                                                        </select> entries</label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="order-listing_filter" class="dataTables_filter"><label><input
                                                            type="search" class="form-control" placeholder="Search"
                                                            aria-controls="order-listing"></label></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="order-listing" class="table dataTable no-footer" role="grid"
                                                    aria-describedby="order-listing_info">
                                                    <thead>
                                                        <tr class="bg-primary text-white" role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Order #: activate to sort column ascending"
                                                                style="width: 10.4219px;">#</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Order #: activate to sort column ascending"
                                                                style="width: 10.4219px;">Action</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Actions: activate to sort column ascending"
                                                                style="width: 700.141px;">Nama File</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Ship to: activate to sort column ascending"
                                                                style="width: 97.5469px;">Dibuat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($file as $hasil => $asu)
                                                        <tr role="row" class="odd">
                                                            <td>{{ $loop->iteration }}</td>

                                                            <td class="text-right">
                                                                <a href="{{ $asu->image }}"><button
                                                                        class="btn btn-inverse-dark btn-sm" type="button"
                                                                        id="dropdownMenuSizeButton3">
                                                                        <i class="fa fa-file-download"></i>
                                                                    </button></a>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="order-listing_info" role="status"
                                                    aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="order-listing_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="order-listing_previous"><a href="#"
                                                                aria-controls="order-listing" data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="order-listing_next"><a href="#"
                                                                aria-controls="order-listing" data-dt-idx="1" tabindex="0"
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

@endsection
