@extends('layout/3')
@section('isi')
    
{{-- <form action="{{ route('xnxx.store', $skema->id) }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="image">
    <button class="submit"></button>
</form> --}}


<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Table</h4>
          <p class="card-description">
            Add class <code>.table</code>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>Unit </th>
                    <th>Assesmen</th>
                    <th>K</th>
                    <th>BK</th>
                    <th>Input </th>
                </tr>
              </thead>
               @foreach ($skema->asesmens as $asu)
           
            <tbody>                
                <tr>
                    <td>{{ $asu->unikom->unikom }}</td>
                    <td>{{ $asu->asesmen }}</td> 
                    <form action="{{ route('xnxx.store') }}" method="post">
                        @csrf   
                        <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="status" value="Kompeten">
                    <input type="hidden" name="name" value="{{ $asu->asesmen }}">          
                    <td><button type="submit">sasdlhjlk</button></td> 
                    <td><input  type="text" name="image"></td> 
                    <td><input type="file" id="myFile"></td>
                   
                </form>
                </tr>     
            </tbody>
           
            @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Hoverable Table</h4>
          <p class="card-description">
            Add class <code>.table-hover</code>
          </p>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                    <th>Status</th>
                    <th>Assesmen Mandiri</th>
                </tr>
              </thead>
              @foreach ($xnxx as $data)
           
              <tbody>                
                  <tr>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->name }}</td>
                  
                  </tr>     
              </tbody>
             
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>

{{-- <div class="row">
    <div class="form-group child-repeater-table">
        <div class="row">
       <div>
        <table  class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Unit Kompetensi</th>
                    <th>Assesmen Mandiri</th>
                    <th>K</th>
                    <th>BK</th>
                    <th>Input Bukti</th>
                    <th>status</th>
                </tr>
            </thead>    
            @foreach ($skema->asesmens as $asu)
           
            <tbody>                
                <tr>
                    <td>{{ $asu->unikom->unikom }}</td>
                    <td>{{ $asu->asesmen }}</td> 
                    <form action="{{ route('xnxx.store') }}" method="post">
                        @csrf   
                        <input type="hidden" name="user_nama" value="{{ Auth::user()->name }}">

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="status" value="Kompeten">
                    <input type="hidden" name="name" value="{{ $asu->asesmen }}">          
                    <td><button type="submit">sasdlhjlk</button></td> 
                    <td><input  type="text" name="image"></td> 
                    <td><input type="file" id="myFile"></td>
                   
                </form>
                </tr>     
            </tbody>
           
            @endforeach <button></button>
        </table>
       </div>
<div></div>
    </div>
        <div class="row">
            <table  class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Unit Kompetensi</th>
                        <th>Assesmen Mandiri</th>
                       
                    </tr>
                </thead>    
                @foreach ($skema->asesmens as $asu)
               
                <tbody>                
                    <tr>
                        <td>{{ $asu->unikom->unikom }}</td>
                        <td>{{ $asu->asesmen }}</td> 
                       
                      
                    </form>
                    </tr>     
                </tbody>
               
                @endforeach <button></button>
            </table>
        </div>
    </div>
</div> --}}


{{-- 
<table class="table">
    <thead>
        <tr>
            <th>11</th>
            <th>22</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($xnxx as $asu)
        <tr>
            <td>{{ $asu->name }}</td>
            <td>{{ $asu->image }}</td>
            <td>{{ $asu->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}


{{-- <div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic Table</h4>
      <p class="card-description">A basic example of js-grid</p>
      <div id="js-grid" class="jsgrid" style="position: relative; height: 500px; width: 100%;"><div class="jsgrid-grid-header jsgrid-header-scrollbar"><table class="jsgrid-table"><tr class="jsgrid-header-row"><th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th><th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Age</th><th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Address</th><th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Country</th><th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Is Married</th><th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-mode-button jsgrid-search-mode-button" type="button" title="Switch to searching"></th></tr><tr class="jsgrid-filter-row" style="display: none;"><td class="jsgrid-cell" style="width: 150px;"><input type="text"></td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td><td class="jsgrid-cell" style="width: 200px;"><input type="text"></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select><option value="0"></option><option value="1">United States</option><option value="2">Canada</option><option value="3">United Kingdom</option><option value="4">France</option><option value="5">Brazil</option><option value="6">China</option><option value="7">Russia</option></select></td><td class="jsgrid-cell" style="width: 100px;"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-search-button" type="button" title="Search"><input class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter"></td></tr><tr class="jsgrid-insert-row" style=""><td class="jsgrid-cell" style="width: 150px;"><input type="text"></td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td><td class="jsgrid-cell" style="width: 200px;"><input type="text"></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select><option value="0"></option><option value="1">United States</option><option value="2">Canada</option><option value="3">United Kingdom</option><option value="4">France</option><option value="5">Brazil</option><option value="6">China</option><option value="7">Russia</option></select></td><td class="jsgrid-cell" style="width: 100px;"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-insert-button" type="button" title="Insert"></td></tr></table></div><div class="jsgrid-grid-body" style="height: 318.344px;"><table class="jsgrid-table"><tbody><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Otto Clay</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">61</td><td class="jsgrid-cell" style="width: 200px;">Ap #897-1459 Quam Avenue</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">China</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Connor Johnston</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">73</td><td class="jsgrid-cell" style="width: 200px;">Ap #370-4647 Dis Av.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Lacey Hess</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">29</td><td class="jsgrid-cell" style="width: 200px;">Ap #365-8835 Integer St.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Timothy Henson</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">78</td><td class="jsgrid-cell" style="width: 200px;">911-5143 Luctus Ave</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Ramona Benton</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">43</td><td class="jsgrid-cell" style="width: 200px;">Ap #614-689 Vehicula Street</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Ezra Tillman</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">51</td><td class="jsgrid-cell" style="width: 200px;">P.O. Box 738, 7583 Quisque St.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Dante Carter</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">59</td><td class="jsgrid-cell" style="width: 200px;">P.O. Box 976, 6316 Lorem, St.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Christopher Mcclure</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">58</td><td class="jsgrid-cell" style="width: 200px;">847-4303 Dictum Av.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Ruby Rocha</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">62</td><td class="jsgrid-cell" style="width: 200px;">5212 Sagittis Ave</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Imelda Hardin</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">39</td><td class="jsgrid-cell" style="width: 200px;">719-7009 Auctor Av.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Jonah Johns</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">28</td><td class="jsgrid-cell" style="width: 200px;">P.O. Box 939, 9310 A Ave</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Herman Rosa</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">49</td><td class="jsgrid-cell" style="width: 200px;">718-7162 Molestie Av.</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Arthur Gay</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20</td><td class="jsgrid-cell" style="width: 200px;">5497 Neque Street</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-alt-row"><td class="jsgrid-cell" style="width: 150px;">Xena Wilkerson</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">63</td><td class="jsgrid-cell" style="width: 200px;">Ap #303-6974 Proin Street</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr><tr class="jsgrid-row"><td class="jsgrid-cell" style="width: 150px;">Lilah Atkins</td><td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">33</td><td class="jsgrid-cell" style="width: 200px;">622-8602 Gravida Ave</td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td><td class="jsgrid-cell" style="width: 100px;"><div class="form-check mt-0"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="checked"><i class="input-helper"></i></label></div></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></td></tr></tbody></table></div><div class="jsgrid-pager-container"><div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span> <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span><span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">...</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 7 </div></div><div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div><div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div></div>
    </div>
  </div> --}}
@endsection