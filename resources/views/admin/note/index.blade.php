@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-edit"></i> Catatan
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catatan</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <a href="{{ route('note.create') }}"><button class="btn btn-success"><i class="fas fa-plus"></i> Tambah
                    Catatan</button></a>
            <br><br>
            <h4 class="card-title"><i class="fas fa-cogs"> List Skema</i></h4>
            <div class="row grid-margin">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-dark text-white" role="row">
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
                                                    style="width: 700.141px;">Judul Catatan</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 97.5469px;">Dibuat</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 97.5469px;">Diupdate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($note as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-inverse-dark btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a href="{{ route('note.edit', $asu->id) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-inverse-warning btn-block"><i
                                                                        class="fa fa-edit "></i> Edit
                                                                    Catatan</button></a>
                                                            <a href="{{ route('note.show', $asu->id) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-inverse-info btn-block"><i
                                                                        class="fa fa-eye "></i> Lihat
                                                                    Catatan</button></a>
                                                            <form action="{{ route('note.destroy', $asu->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                @csrf
                                                                @method('delete')
                                                                <a href=""><button type="submit"
                                                                        class="btn btn-inverse-danger btn-block"><i
                                                                            class="fa fa-trash "></i> Hapus
                                                                        Catatan</button></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $asu->judul }}</td>
                                                    <td>{{ $asu->created_at }}</td>
                                                    <td>{{ $asu->updated_at }}</td>
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
