@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-bullhorn"></i> Berita
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH DATA -->
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Berita
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('berita.store') }}" enctype="multipart/form-data" method="POST"
                        class="form-control">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Berita</h4>
                            <div class="col-md-12">
                                <label for="image-upload" id="image-label">Pilih Gambar <i
                                        class="fas fa-image"></i></label>
                                <input accept=".jpg," type="file" name="image">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="" holder>Pilih Kategori</option>
                                    @foreach ($kategori as $result)
                                        <option value="{{ $result->id }}">{{ $result->kategori }}</option>
                                        select
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Status Berita</label>
                                <select class="form-control" name="status">
                                    <option value="" holder>Pilih Status</option>
                                    <option value="Posting">Posting</option>
                                    <option value="Tidak di Posting">Tidak di Posting</option>
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Judul Berita</label>
                                <input type="text" class="form-control" placeholder="Judul berita" name="title"
                                    maxlength="100">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Excerpt</label>
                                <input type="text" class="form-control" placeholder="Excerpt" name="excerpt">
                            </div><br>
                            <label for="">Isi Konten Berita</label>
                            <div class="col-md-9">
                                <textarea class="summernote" name="body"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-block"><i class="fas fa-upload"></i>
                                Posting</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-list"></i> List Berita Anda</h4>
            <p class="card-description">
            <div class="table-responsive">
                <table id="order-listing" class="table dataTable no-footer" role="grid"
                    aria-describedby="order-listing_info">
                    <thead>
<<<<<<< HEAD
                        <tr class="bg-danger text-white">
=======
                        <tr class="bg-light text-black">
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                            <th style="width: 10px">
                                #
                            </th>
                            <th style="width: 10px">
                                Action
                            </th>
                            <th>
                                Thumbnail
                            </th>
                            <th style="width: 600px">
                                Judul
                            </th>
                            <th>
                                Dibuat
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $asu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                        <a href="{{ route('berita.show', $asu->id) }}"><button type="submit"
                                                class="btn btn-warning btn-sm btn-block"><i class="fa fa-eye "></i>
                                                Edit & Detail Berita</button></a>
                                        <form action="{{ route('berita.destroy', $asu->id) }}" method="POST"
                                            onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                            @csrf
                                            @method('delete')
                                            <a href=""><button type="submit"
                                                    class="btn btn-danger btn-sm btn-block"><i
                                                        class="fa fa-trash "></i> Hapus</button></a>
                                        </form>
                                    </div>
                                </td>
                                <td class="py-1">
                                    <img src="{{ asset($asu->image) }}" alt="image">
                                </td>
                                <td>
                                    {{ $asu->title }}
                                </td>
                                <td>
                                    {{ $asu->created_at->diffforhumans() }}
                                </td>
                                <td>
                                    <p class="badge badge-outline-dark">{{ $asu->status }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
