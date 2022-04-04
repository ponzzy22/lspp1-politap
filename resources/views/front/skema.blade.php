@extends('layout/1')
@include('layout/verifikasi')
@section('isi')

<ul>
  @foreach ($skema as $asu)
      <li><a href="{{ route('list', $asu->skema) }}">{{ $asu->skema }} <span>{{ $asu->unikom->count() }}</span> </a></li>
  @endforeach
</ul>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Orders</h4>
      <div class="row grid-margin">
        <div class="col-12">
          <div class="alert alert-warning" role="alert">
              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="form-control"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
              <thead>
                <tr class="bg-primary text-white" role="row"><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 61.4219px;">Order #</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 75.75px;">Customer</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 57.5469px;">Ship to</th><th class="sorting_desc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" aria-sort="descending" style="width: 81.0938px;">Base Price</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased Price: activate to sort column ascending" style="width: 122.562px;">Purchased Price</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.1094px;">Status</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 194.141px;">Actions</th></tr>
              </thead>
              <tbody>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              <tr role="row" class="odd">
                    <td class="">WD-75</td>
                    <td>Daniel</td>
                    <td>Singapore</td>
                    <td class="sorting_1">$6800</td>
                    <td>$9800</td>
                    <td>
                      <label class="badge badge-danger">Pending</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="">WD-68</td>
                    <td>Tim</td>
                    <td>Italy</td>
                    <td class="sorting_1">$6300</td>
                    <td>$2100</td>
                    <td>
                      <label class="badge badge-warning">Open</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="">WD-78</td>
                    <td>Tim</td>
                    <td>Italy</td>
                    <td class="sorting_1">$6300</td>
                    <td>$2100</td>
                    <td>
                      <label class="badge badge-success">Closed</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="">WD-66</td>
                    <td>Stella</td>
                    <td>Japan</td>
                    <td class="sorting_1">$5600</td>
                    <td>$3600</td>
                    <td>
                      <label class="badge badge-info">On hold</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="">WD-72</td>
                    <td>Alphy</td>
                    <td>Brazil</td>
                    <td class="sorting_1">$5500</td>
                    <td>$7200</td>
                    <td>
                      <label class="badge badge-warning">Open</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="">WD-62</td>
                    <td>Doe</td>
                    <td>Brazil</td>
                    <td class="sorting_1">$4500</td>
                    <td>$7500</td>
                    <td>
                      <label class="badge badge-danger">Pending</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="">WD-65</td>
                    <td>Edward</td>
                    <td>Indonesia</td>
                    <td class="sorting_1">$3600</td>
                    <td>$4800</td>
                    <td>
                      <label class="badge badge-success">Closed</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="">WD-79</td>
                    <td>Jack</td>
                    <td>Tokyo</td>
                    <td class="sorting_1">$3100</td>
                    <td>$7300</td>
                    <td>
                      <label class="badge badge-danger">Pending</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="">WD-63</td>
                    <td>Sam</td>
                    <td>Tokyo</td>
                    <td class="sorting_1">$2100</td>
                    <td>$6300</td>
                    <td>
                      <label class="badge badge-success">Closed</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="">WD-69</td>
                    <td>John</td>
                    <td>Tokyo</td>
                    <td class="sorting_1">$2100</td>
                    <td>$6300</td>
                    <td>
                      <label class="badge badge-success">Closed</label>
                    </td>
                    <td class="text-right">
                      <button class="btn btn-light">
                        <i class="fa fa-eye text-primary"></i>View
                      </button>
                      <button class="btn btn-light">
                        <i class="fa fa-times text-danger"></i>Remove
                      </button>
                    </td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="order-listing_next"><a href="#" aria-controls="order-listing" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection