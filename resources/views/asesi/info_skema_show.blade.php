@extends('layout/3')
@section('isi')
<div class="page-header">
    <h4>
        <i class="fas fa-eye"></i>  Detail Skema {{ $skema->skema }}
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-inverse-info">
            <li class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('info.skema') }}">Skema/Kluster</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Skema {{ $skema->skema }}</li>
        </ol>
    </nav>
</div><br>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div id="dragula-left" class="py-2">
                    <div class="card rounded border mb-2">
                        <div class="card-body p-3">
                            <div class="media">
                                <i class="fas fa-print icon-sm align-self-center mr-3"></i>
                                <div class="media-body">
                                <h6 class="mb-1">{{ $skema->skema }}</h6>
                                <p class="mb-0 text-muted">
                                        Nama Skema
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                        <i class="fas fa-code icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $skema->kode_skema }}</h6>
                                <p class="mb-0 text-muted">
                                    Kode Skema
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                        <i class="fas fa-user icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $skema->asesor->nama }}</h6>
                                <p class="mb-0 text-muted">
                                    Asesor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                        <i class="fa fa-building icon-sm align-self-center mr-3"></i>
                        <div class="media-body">
                            <h6 class="mb-1">{{ $skema->tuk->tuk }}</h6>
                            <p class="mb-0 text-muted">
                            Tempat Uji Kompetensi
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-check-square icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $skema->status->status }}</h6>
                                <p class="mb-0 text-muted">
                                    Status Skema
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="dragula-right" class="py-2">
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-tasks icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">Unit Kompetensi    <i class="fa fa-arrow-down icon-sm align-self-center mr-3"></i></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <table class="table table-bordered">
                            @foreach ($skema->unikoms as $item)
                            <tr>
                                <th style="width: 20px">{{ $loop->iteration }}</th>
                                <td>{{ $item->unikom }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>
@endsection