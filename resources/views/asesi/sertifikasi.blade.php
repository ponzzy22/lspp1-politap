@extends('layout/3')
@section('isi')

<div class="page-header">
    <h4>
        <i class="fas fa-certificate"></i>  Koleksi Sertifikat
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-info">
            <li class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Koleksi Sertifikat</li>
        </ol>
    </nav>
</div><br>
<!-- /////////////////////////////////// -->
{{-- TAMPIL SKEMA --}}
<!-- /////////////////////////////////// -->
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
                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                    <thead>
                        <tr class="bg-info text-white" role="row">
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 10.4219px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 10.4219px;">Action</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 100.141px;">Kode Skema</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 575.75px;">Skema</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 97.5469px;">Dibuat</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach ($skema as $hasil => $asu) --}}
                        <tr role="row" class="odd">
                            <td></td>
                            <td class="text-right">
                                {{-- <a href="{{ route('info_skema.show', $asu->id) }}"><button type="submit" class="btn btn-inverse-info btn-sm btn-block"><i class="fa fa-eye "></i>  Lihat Detail Skema</button></a> --}}
                            </td>
                            <td class=""></td>
                            <td></td>
                            <td></td>
                            <td><label class="badge badge-light"></label></td>
                        </tr>
                    {{-- @endforeach --}}
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

@endsection