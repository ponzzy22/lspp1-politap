<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_register;
use App\Models\Asesor;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\Xnxx;

class Formapl1Controller extends Controller
{

    public function jwp1(Request $request, $id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin.format.formapl1.jwp1', compact('validasi','tuk', 'asesor', 'identitas', 'xnxx'));
    }


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
        //
    }
}
