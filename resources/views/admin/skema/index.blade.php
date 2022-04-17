@extends('layout/2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fab fa-pagelines"></i> Skema
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Skema/Kluster</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH SKEMA --}}
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Skema
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('skema.store') }}" method="POST" class="form-sample">
                        @csrf
                        <div class="card-description text-left">
                            <button type="submit" class="btn btn-inverse-success btn-icon-text btn-block">
                                <i class="fa fa-save btn-icon-prepend"></i>
                                Simpan
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Skema</label>
                                    <div class="col-sm-9">
                                        <input type="text" maxlength="100" name="skema" class="form-control" placeholder="Nama Skema" />
                                        @error('skema')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Skema</label>
                                    <div class="col-sm-9">
                                        <input type="text" maxlength="100" name="kode_skema" class="form-control"
                                            placeholder="Kode Skema" />
                                        @error('kode_skema')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Prodi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="prodi_id">
                                            <option value="" holder>Pilih Prodi</option>
                                            @foreach ($prodi as $result)
                                                <option value="{{ $result->id }}">{{ $result->prodi }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Asesor</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="asesor_id">
                                            <option value="" holder>Pilih Asesor</option>
                                            @foreach ($asesor as $result)
                                                <option value="{{ $result->id }}">{{ $result->nama }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Uji Kompetensi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="tuk_id">
                                            <option value="" holder>Pilih TUK</option>
                                            @foreach ($tuk as $result)
                                                <option value="{{ $result->id }}">{{ $result->tuk }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Skema</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status_id">
                                            <option value="" holder>Pilih Status Skema</option>
                                            @foreach ($status as $result)
                                                <option value="{{ $result->id }}">{{ $result->status }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    {{-- TAMPIL SKEMA --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
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
                                                    style="width: 100.141px;">Kode Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 97.5469px;">Dibuat</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 66.1094px;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $hasil => $asu)
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
                                                            <a href="{{ route('skema.edit', $asu->id) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-inverse-warning btn-sm btn-block"><i
                                                                        class="fa fa-edit "></i> Edit Skema</button></a>
                                                            <a href="{{ route('skema.detail', $asu->id) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-inverse-info btn-sm btn-block"><i
                                                                        class="fa fa-eye "></i> Lihat Detail
                                                                    Skema</button></a>
                                                            <a href="{{ route('skema.show', $asu->id) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-inverse-primary btn-sm btn-block"><i
                                                                        class="fa fa-list "></i> List Unit
                                                                    Kompetensi</button></a>
                                                            <form action="{{ route('skema.destroy', $asu->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                @csrf
                                                                @method('delete')
                                                                <a href=""><button type="submit"
                                                                        class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                            class="fa fa-trash "></i> Hapus</button></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $asu->kode_skema }}</td>
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
@endsection
