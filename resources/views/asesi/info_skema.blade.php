@extends('layout/asesi1')
@section('judul')
    Informasi Skema | LSP-POLITAP
@endsection
@section('isi')

<div class="page-header">
    <h4>
        <i class="fas fa-list"></i>  Informasi Skema
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
            <li class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informasi Skema</li>
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
                        <tr class="bg-danger text-white" role="row">
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 10.4219px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 10.4219px;">Action</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 100.141px;">Kode Skema</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 300.75px;">Skema</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 97.5469px;">Dibuat</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($skema as $hasil => $asu)
                        <tr role="row" class="odd">
                            <td class="font-weight-bold">{{ $loop->iteration }}</td>
                            <td class="text-right">
                                <a href="{{ route('info_skema.show', $asu->id) }}"><button type="submit" class="btn btn-inverse-dark btn-sm btn-block font-weight-bold"><i class="fa fa-eye "></i>  Lihat Detail Skema</button></a>
                            </td>
                            <td class="font-weight-bold">{{ $asu->kode_skema }}</td>
                            <td class="font-weight-bold">{{ $asu->skema }}</td>
                            <td class="font-weight-bold">{{ $asu->created_at }}</td>
                            <td class="font-weight-bold"><label class="badge badge-light font-weight-bold">{{ $asu->status->status }}</label></td>
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

@endsection
