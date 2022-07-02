@extends('layout.client')
@section('judul')
    Prosedur Sertifikasi | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-pencil-square"></i> Prosedur Pendaftaran Sertifikasi </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Gambar -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($tutorial2 as $asu)
                                @if ($asu->image)
                                    <img src="{{ $asu->image }}" width="100%">
                                @else
                                    <h1 class="text-danger">TIDAK ADA GAMBAR</h1>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Video -->
    <div id="logo" class="more-info about-info">
        <div class="container">

            <div class="section-heading">
                <h2>Video Tutorial <em>Pendaftaran Sertifikasi </em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($tutorial as $asu)
                                @if ($asu->image)
                                    <video width="100%" controls>
                                        <source src="{{ $asu->image }}" type="video/mp4">
                                        Your browser does not support HTML video.
                                    </video>
                                @else
                                    <h1 class="text-danger">TIDAK ADA VIDEO</h1>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
