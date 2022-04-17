<?php

namespace App\Http\Controllers;

use App\Models\Galeri_foto;
use App\Models\Group_galeri;
use Illuminate\Http\Request;

class DeleteGaleriFotoController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $galeri = Galeri_foto::findorfail($id);
        $galeri->delete();
        return back()->with('success', 'Galeri Berhasil dihapus');
    }
}
