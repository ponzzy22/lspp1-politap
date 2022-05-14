@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 class="font-weight-normal text-primary" data-aos="fade-left" data-aos-delay="300"><i class="fab fa-pagelines"></i>
            {{ $skema->skema }}</h3>
        {{-- <nav aria-label="breadcrumb" data-aos="fade-left" data-aos-delay="300">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">
                        <p>beranda</p>
                    </a></li>
                <li class="breadcrumb-item active" aria-current="page">LIST UNIT KOMPETENSI</li>
            </ol>
        </nav> --}}
    </div><br>
    {{-- <---------------------- TAMPIL SKEMA ----------------------> --}}
    <div class="card-body">
        <div class="table-responsive" data-aos="fade-left" data-aos-delay="500">
            <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                <thead>
                    <tr class="bg-primary text-white" role="row">
                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1"
                            aria-label="Order #: activate to sort column ascending" style="width: 10.42px;">#</th>
                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1"
                            aria-label="Customer: activate to sort column ascending" style="width:400.725px;">Kode Unit
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1"
                            aria-label="Ship to: activate to sort column ascending" style="width: 950.5469px;">Unit
                            Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skema->unikoms as $asu)
                        <tr role="row" class="odd">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $asu->kode_unikom }}</td>
                            <td>{{ $asu->unikom }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
