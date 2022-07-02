@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-file-upload"></i> Upload File Dokumen
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upload File Dokumen</li>
            </ol>
        </nav>
    </div><br>

    {{-- <---------------------- UPLOAD LISENSI LEMBAGA ----------------------> --}}
    {{-- <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a href="{{ route('/') }}" >
                        &plus; LISENSI LEMBAGA
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4" placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
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
                                                                <button class="btn btn-inverse-dark btn-sm dropdown-toggle"
                                                                    type="button" id="dropdownMenuSizeButton3"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="fa fa-cog"></i>
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuSizeButton3">
                                                                    <a href="{{ route('file.show', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
                                                                    <form action="{{ route('file.destroy', $asu->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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
    </div> --}}

    {{-- <---------------------- UPLOAD SKKNI ----------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-111" aria-expanded="true"
                        aria-controls="collapse-111">
                        &plus; SKKNI
                    </a>
                </h6>
            </div>
            <div id="collapse-111" class="" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('skkni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4"
                                placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
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
                                                            style="width: 700.141px;">Nama File</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Ship to: activate to sort column ascending"
                                                            style="width: 97.5469px;">Dibuat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($skkni as $hasil => $asu)
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
                                                                    <a href="{{ route('skkni_detail', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
<<<<<<< HEAD
                                                                    <form
                                                                        action="{{ route('skkni.destroy', $asu->id) }}"
=======
                                                                    <form action="{{ route('skkni.destroy', $asu->id) }}"
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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

    {{-- <---------------------- UPLOAD FILE APL 02 ----------------------> --}}
    {{-- <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11111" aria-expanded="true"
                        aria-controls="collapse-11111">
                        &plus; DOKUMEN FORMULIR APL-02
                    </a>
                </h6>
            </div>
            <div id="collapse-11111" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('fileapl2.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4"
                                placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
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
                                                            style="width: 700.141px;">Nama File</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Ship to: activate to sort column ascending"
                                                            style="width: 97.5469px;">Dibuat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($fileapl2 as $hasil => $asu)
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
                                                                    <a href="{{ route('fileapl2_detail', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
                                                                    <form
                                                                        action="{{ route('fileapl2.destroy', $asu->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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
    </div> --}}

    {{-- <---------------------- UPLOAD FILE LAIN ----------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-1111111" aria-expanded="true"
                        aria-controls="collapse-1111111">
                        &plus; FILE DOKUMEN LAIN
                    </a>
                </h6>
            </div>
            <div id="collapse-1111111" class="" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('filelain.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4"
                                placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
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
                                                            style="width: 700.141px;">Nama File</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Ship to: activate to sort column ascending"
                                                            style="width: 97.5469px;">Dibuat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($filelain as $hasil => $asu)
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
                                                                    <a href="{{ route('filelain_detail', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
                                                                    <form
                                                                        action="{{ route('filelain.destroy', $asu->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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
@endsection
