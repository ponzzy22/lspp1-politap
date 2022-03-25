<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class UiController extends Controller
{

    public function index()
    {
        $beranda = Beranda::all();
        return view('admin/beranda/index', compact('beranda'));
    }





    public function edit($id)
    {
        $beranda = Beranda::findorfail($id);
        return view('admin/beranda/edit', compact('beranda'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|max:16',
            'judul2' => 'required|max:28',
            'deskripsi' => 'required'
        ]);
        
        $beranda_data = [
            'judul' => $request->judul,
            'judul2' => $request->judul2,
            'deskripsi' => $request->deskripsi,
        ];

        Beranda::whereId($id)->update($beranda_data);

        return redirect()->route('sett-beranda.index')->with('success','Kategori Anda Berhasil Disimpan');
    }


    public function judul_deskripsi()
    {
        $beranda = Beranda::all();
        return view('beranda', compact('beranda'));
    }





}
