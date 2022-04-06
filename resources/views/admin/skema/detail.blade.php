@extends('layout/2')
@section('isi')
@include('layout/verifikasi')

<div class="card">
        <div class="card-body">
          <h4 class="card-title">Informasi Detail Skema   {{ $skema->skema }}</h4>
          <p class="card-description">
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
            </div>
            <div class="col-md-6">
              <div id="dragula-right" class="py-2">
                <div class="card rounded border mb-2">
                  <div class="card-body p-3">
                    <div class="media">
                      <i class="fa fa-user icon-sm align-self-center mr-3"></i>
                      <div class="media-body">
                        <h6 class="mb-1">{{ $skema->status->status }}</h6>
                        <p class="mb-0 text-muted">
                          Status Skema                               
                        </p>
                      </div>                              
                    </div> 
                  </div>
                </div>
                <div class="card rounded border mb-2">
                  <div class="card-body p-3">
                    <div class="media">
                      <i class="fa fa-tasks icon-sm align-self-center mr-3"></i>
                      <div class="media-body">
                        <h6 class="mb-1">Unit Kompetensi</h6>  
                        @foreach ($skema->unikoms as $item)
                        <p class="mb-0 text-muted">
                            {{ $loop->iteration }}.  {{ $item->unikom }}                        
                          </p>
                       @endforeach 
                      </div>                              
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        

        {{-- {{ $skema->skema }}
        Kode Skema =><code class="text-info">{{ $skema->kode_skema }}</code>
                <br>Prodi =><code class="text-info">{{ $skema->prodi->prodi }}</code>
                <br>Asesor =><code class="text-info">{{ $skema->asesor->nama }}</code>
                <br>TUK =><code class="text-info">{{ $skema->tuk->tuk }}</code>
                <br>Status =><code class="text-info">{{ $skema->status->status }}</code> --}}
                
   



@endsection