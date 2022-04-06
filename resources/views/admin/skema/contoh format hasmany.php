 <br><br>

<div class="table-responsive">
    @forelse ($skema->unikoms as $unitkompetensi)
<table class="table table-bordered">
    <thead>
    <tr>
        <th>{{ $unitkompetensi->unikom }}</th>
        <th>chehck</th>
        <th>chehck</th>
        <th>upload</th>
    </tr>
    </thead>
    @foreach ($skema->asesmens as $asesmandiri)
    <tbody>
    <tr>
        <td>@if ($unitkompetensi->id == $asesmandiri->unikom_id)
                {{ $asesmandiri->asesmen }}                        
            @endif</td>
        <td><input type="checkbox" name="" id=""></td>
        <td><input type="checkbox" name="" id=""></td>
        <td><input type="file" name="" id=""></td>               
    </tr>
</tbody>
    @endforeach
</table>
@empty
    
@endforelse
</div>
