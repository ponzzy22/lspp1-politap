@extends('layout/admin1')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-bars"></i> Unit Kompetensi
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skema.index') }}">List Skema</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Unit Kompetensi </li>
            </ol>
        </nav>
    </div><br>


    {{-- <---------------------- TAMBAH DATA ----------------------> --}}
    <div class="accordion accordion-solid-header" id="-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Ketik disini Untuk Menambah Unit Kompetensi
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('unikom.store') }}" method="POST" class="form-inline">
                        @csrf
                        <input type="text" maxlength="100" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                            name="kode_unikom" placeholder="Kode Unit">
                        <div class="input-group mb-2 mr-sm-2">
                            <input style="width: 500px" type="text" maxlength="100" class="form-control"
                                id="inlineFormInputGroupUsername2" name="unikom" placeholder="Nama Unit Kompetensi">
                        </div>
                        <button type="submit" name="skema_id" value="{{ $skema->id }}" class="btn btn-success mb-2"><i
                                class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <---------------------- TAMPIL UNIT ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-suitcase"> {{ $skema->skema }} </i></h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-warning text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.42px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 10.141px;">Actions</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width:200.725px;">Kode Unit </th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 1250.5469px;">Unit Kompetensi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema->unikoms as $asu)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-dark btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a href="{{ route('show_asesmen', Crypt::encryptString($asu->id)) }}"><button
                                                                type="submit"
                                                                class="btn btn-success btn-block"><i
                                                                    class="fa fa-list-alt "></i>
                                                                Elemen</button></a>
                                                            <a href="{{ route('unikom.edit', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-warning btn-block"><i
                                                                        class="fa fa-edit "></i> Edit Unit
                                                                    </button></a>
                                                            <form action="{{ route('unikom.destroy', $asu->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                @csrf
                                                                @method('delete')
                                                                <a href=""><button type="submit"
                                                                        class="btn btn-danger btn-block"><i
                                                                            class="fa fa-trash "></i> Hapus
                                                                        Unit</button></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>{{ $asu->kode_unikom }}</td>
                                                    <td>{{ $asu->unikom }} </td>
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
