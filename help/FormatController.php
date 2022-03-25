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

    public function create()
    {
        return view('admin/beranda/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);


        $beranda = Beranda::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('sett-beranda.index');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $beranda = Beranda::findorfail($id);
        return view('admin/beranda/edit', compact('beranda'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        
        $beranda_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        Beranda::whereId($id)->update($beranda_data);

        return redirect()->route('sett-beranda.index');
    }


    public function destroy($id)
    {
        // $category = Category::findorfail($id);
        // $category->delete();

        // return redirect()->back()->with('success','Kategori Berhasil Dihapus');
    }

    public function judul_deskripsi()
    {
        $beranda = Beranda::all();
        return view('beranda', compact('beranda'));
    }





}
