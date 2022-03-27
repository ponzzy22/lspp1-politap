@extends('layout/1')
@include('layout/verifikasi')
@section('isi')

<div class="page-header">
  <h3>
  <i class="fas fa-building"></i> Profil LSP P1-POLITAP
  </h3>

  <!-- /////////////////////////////////// -->
  <!-- BREADCRUMB -->
  <!-- /////////////////////////////////// -->
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom  bg-inverse-primary">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
          {{-- <li class="breadcrumb-item">
              <a href="#"> </a>
          </li> --}}
          <li class="breadcrumb-item active" aria-current="page">LSP P1-POLITAP</li>
      </ol>
  </nav>
</div><br>

  <!-- /////////////////////////////////// -->
  <!-- MAIN WEB -->
  <!-- /////////////////////////////////// -->
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="pills-energy-tab-custom" data-toggle="pill" href="#pills-bro" role="tab" aria-controls="pills-contact" aria-selected="true">
                Profil
              </a>              
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false">
                MOTTO
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-energy" role="tab" aria-controls="pills-profile" aria-selected="false">
                VISI
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-asu" role="tab" aria-controls="pills-profile" aria-selected="false">
                MISI
              </a>
            </li>
          </ul>
          <div class="tab-content tab-content-custom-pill" id="pills-tabContent-custom">
            <div class="tab-pane fade  active show" id="pills-bro" role="tabpanel" aria-labelledby="pills-profile-tab-custom">
              <div class="media">
                @foreach ($profil as $asu)
                <img class="mr-1 w-25 rounded" src="{{ asset($asu->image) }}" alt="sample image">
                  <div class="col-md-10">
                  <h6>
                    {{ $asu->profil }}
                  </h6>
                  </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-contact-tab-custom">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="public/assets/images/carousel/banner_12.jpg" alt="sample image">
                <div class="col-md-10">
                  <h6>
                      {{ $asu->motto }}
                  </h6>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-energy" role="tabpanel" aria-labelledby="pills-vibes-tab-custom">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="public/assets/images/logo/lsp.png" alt="sample image">
                <div class="col-md-10">
                  <h6>
                    {{ $asu->visi }}  
                  </h6>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-asu" role="tabpanel" aria-labelledby="pills-vibes-tab-custom">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="public/assets/images/logo/lsp.png" alt="sample image">
                <div class="col-md-10">
                  <h6>
                    {{ $asu->misi }}  
                  </h6>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
@endsection