@extends('layout/5')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Settingan Profil LSP-POLITAP
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settingan Profil LSP-POLITAP</li>
            </ol>
        </nav>
    </div><br>


    {{-- <---------------------- SETTING PROFIL ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">SETTING PROFIL</h4>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab"
                        aria-controls="home-1" aria-selected="true">Setting Profil Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab"
                        aria-controls="profile-1" aria-selected="false">Setting Halaman Profil</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($profil as $asu)
                                <div class="faq-section">
                                    <div class="container-fluid py-2">
                                        <a href="{{ route('f_profil.edit', $asu->id) }}">
                                            <button type="button" class="btn btn-warning btn-icon-text">
                                                <i class="far fa-edit btn-icon-prepend"></i>
                                                Setting Profil Beranda
                                            </button>
                                        </a>
                                    </div>
                                    <div id="accordion-1" class="accordion accordion-solid-header">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h4 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Judul Profil LSP P1 - POLITAP
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->profil !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h4 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseOne1"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        Isi Profil LSP P1 - POLITAP
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->isi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Visi LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->visi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Misi LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->misi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Motto LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse4" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->motto !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Logo LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse5" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    <img src="{{ asset($asu->image) }}" style="width: 200px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                        <div class="media-body">
                            @foreach ($profil2 as $asu)
                                <div class="faq-section">
                                    <div class="container-fluid py-2">
                                        <a href="{{ route('f_profil.edit', $asu->id) }}">
                                            <button type="button" class="btn btn-warning btn-icon-text">
                                                <i class="far fa-edit btn-icon-prepend"></i>
                                                Setting Halaman Profil
                                            </button>
                                        </a>
                                    </div>
                                    <div id="accordion-1" class="accordion accordion-solid-header">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h4 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseOne2"
                                                        aria-expanded="true" aria-controls="collapseOne2">
                                                        Profil LSP P1 - POLITAP
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->profil !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseTwo3"
                                                        aria-expanded="false" aria-controls="collapseTwo3">
                                                        Visi LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->visi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapseThree4"
                                                        aria-expanded="false" aria-controls="collapseThree4">
                                                        Misi LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree4" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->misi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree5">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapse45" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Motto LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse45" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $asu->motto !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree6">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-target="#collapse56" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Logo LSP P1 - POLITAP
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse56" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion-1">
                                                <div class="card-body">
                                                    <img src="{{ asset($asu->image) }}" style="width: 200px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
