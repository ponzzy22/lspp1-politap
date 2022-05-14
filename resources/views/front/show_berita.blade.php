@extends('layout/1')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <br><br>
    <div class="page-header">
        <h3 style="font-size: 25pt" class="text text-primary" data-aos="fade-left" data-aos-delay="300">
            {{ $berita->title }}
        </h3>
    </div><br>
{{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="row">
        <div class="col-lg-9 col-md-6 col-12">
            <div class="tab-pane fade active show" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab-custom">
                <div class="media">
                    <img class="mr-5 rounded" width="700px" src="{{ asset($berita->image) }}" alt="image" data-aos="fade-down"
                        data-aos-delay="500">
                </div>
                <div data-aos="fade-up" data-aos-delay="300" >
                    <p>
                        {!! $berita->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div data-aos="fade-left" data-aos-delay="300" class="card">
                <div class="card-header">
                    <h3 class="font-weight-normal text-primary" ><i
                            class="fas fa-bullhorn"></i>
                        Berita
                    </h3>
                </div>
                <div class="card-body">
                    @foreach ($artikel as $asu)
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <h6 class="media-title"><a href="{{ route('berita.tampil', $asu->id) }}">{{ $asu->title }}</a></h6>
                                    <div class="text-small text-primary">
                                        {{ $asu->created_at->diffforhumans() }}
                                        <div class="card"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div><br>
            <div data-aos="fade-left" data-aos-delay="300" class="card">
                <div class="card-header">
                    <h3 class="font-weight-normal text-primary" ><i
                            class="fas fa-info-circle"></i>
                        Pengumuman
                    </h3>
                </div>
                <div class="card-body">
                    @foreach ($pengumuman as $asu)
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <h6 class="media-title"><a href="{{ route('berita.tampil', $asu->id) }}">{{ $asu->title }}</a></h6>
                                    <div class="text-small text-primary">
                                        {{ $asu->created_at->diffforhumans() }}
                                        <div class="card"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div><br>
        </div>
    </div>


@endsection
