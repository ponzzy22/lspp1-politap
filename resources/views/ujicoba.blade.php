@extends('layout/3')
@section('isi')
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
    <button class="btn btn-inverse-danger">TAMBAH</button>
<br><br>
<button class="btn btn-inverse-success">SEMUA</button>

<script>
    btns = document.getElementsByClassName("btn btn-inverse-danger");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
			button.click()
        });
    }
</script>

@endsection