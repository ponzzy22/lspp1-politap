@extends('layout/2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fab fa-pagelines"></i> List Assesmen Mandiri/Formulir APL-02
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('backend') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skema.index') }}">List Skema</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skema.index') }}">Unit Kompetensi</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Assesmen Mandiri/Formulir APL-02</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMPILAN DATA -->
    <!-- /////////////////////////////////// -->
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assesmen Mandiri dari Unit Kompetensi {{ $unikom->unikom }}</h4>
                    <p class="card-description">
                        {{-- Add class <code>.table</code> --}}
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Action</th>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 700px">Assesmen.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unikom->asesmens as $asu)
                                    <tr>
                                        <td class="text-right">
                                            <button class="btn btn-inverse-dark btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                                {{-- <a href="{{ route('unikom.edit', $asu->id) }}"><button type="submit" class="btn btn-inverse-warning btn-sm"><i class="fa fa-edit "></i>  Edit Unit Kompetensi</button></a> --}}
                                                {{-- <a href="{{ route('show_asesmen', $asu->id) }}"><button type="submit" class="btn btn-inverse-info btn-sm"><i class="fa fa-eye "></i>  List Asesmen Mandiri</button></a> --}}
                                                <form action="{{ route('asesmen.destroy', $asu->id) }}" method="POST"
                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                    @csrf
                                                    @method('delete')
                                                    <a href=""><button type="submit"
                                                            class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                class="fa fa-trash "></i> Hapus</button></a>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $asu->asesmen }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Assesmen</h4>
                    <p class="card-description">
                        {{-- Add class <code>.table-hover</code> --}}
                    </p>
                    <form action="{{ route('asesmen.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" maxlength="100" class="form-control" name="asesmen"
                                placeholder="Assesmen Mandiri" aria-label="Recipient's username">
                            @error('asesmen')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-success" name="unikom_id" value="{{ $unikom->id }}"
                                    type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
