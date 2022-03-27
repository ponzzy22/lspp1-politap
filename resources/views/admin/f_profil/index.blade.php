@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="page-header">
  <h3>
  <i class="fas fa-cogs"></i> SETTINGAN CAROUSEL
  </h3>
  <!-- /////////////////////////////////// -->
  <!-- BREADCRUMB -->
  <!-- /////////////////////////////////// -->
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
          {{-- <li class="breadcrumb-item">
              <a href="#"> </a>
          </li> --}}
          <li class="breadcrumb-item active" aria-current="page">Carousel</li>
      </ol>
  </nav>
</div><br>

<!-- /////////////////////////////////// -->
{{-- TAMBAH GAMBAR --}}
<!-- /////////////////////////////////// -->
@foreach ($profil as $asu)
<div class="faq-section">
    <div class="container-fluid bg-light py-2">
        <a href="{{ route('f_profil.edit', $asu->id) }}"> 
            <button type="button" class="btn btn-warning btn-icon-text">
              <i class="far fa-edit btn-icon-prepend"></i>
              SETTING PROFIL
            </button>
        </a>
    </div>
    <div id="accordion-1" class="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h4 class="mb-0">
            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Profil LSP P1 - POLITAP
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-1">
          <div class="card-body">
              {{ $asu->profil }}
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Visi LSP P1 - POLITAP
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-1">
          <div class="card-body">
            {{ $asu->visi }}
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Misi LSP P1 - POLITAP
            </a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-1">
          <div class="card-body">
            {{ $asu->misi }}
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                Motto LSP P1 - POLITAP
            </a>
          </h5>
        </div>
        <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-1">
          <div class="card-body">
            {{ $asu->motto }}
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
              logo LSP P1 - POLITAP
            </a>
          </h5>
        </div>
        <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-1">
          <div class="card-body">
              <img src="{{ asset($asu->image) }}" style="width: 200px" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endforeach
@endsection