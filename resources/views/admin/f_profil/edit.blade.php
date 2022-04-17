@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Edit PROFIL LSP P1-POLITAP
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('f_profil.index') }}">LSP P1-POLITAP</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit PROFIL LSP P1-POLITAP</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- MAIN WEBSITE -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('f_profil.update', $profil->id) }}" enctype="multipart/form-data" method="POST"
                class="forms-sample">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="exampleTextarea1">Profil LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" rows="4"
                        name="profil">{{ $profil->profil }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Visi LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" rows="4"
                        name="visi">{{ $profil->visi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Misi LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" rows="4"
                        name="misi">{{ $profil->misi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Motto LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" rows="1"
                        name="motto">{{ $profil->motto }}</textarea>
                </div>
                <input type="file" class="form-control" name="image"><br>
                <button type="submit" class="btn btn-info btn-icon-text">
                    <i class="far fa-check-square btn-icon-prepend"></i>
                    Update
                </button>
                <a href="{{ route('f_profil.edit', $profil->id) }}"><button type="button"
                        class="btn btn-danger btn-icon-text">
                        <i class="fa fa-times btn-icon-prepend"></i>
                        Batal
                    </button></a>
            </form>
        </div>
    </div>
@endsection
