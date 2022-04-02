<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Unikom;
use Illuminate\Http\Request;

class UnikomController extends Controller
{


    public function index()
    {
        $skema = Skema::all();
        $unikom = Unikom::all();
        return view('admin/unikom/index', compact('unikom', 'skema'));
    }

    public function create()
    {
        $skema = Skema::all();
        return view('admin/unikom/create', compact('skema'));
    }



    public function store(Request $request)
    {
;        $unikom = Unikom::create([
            'kode' => $request->kode,
            'unikom' => $request->unikom,
            'skema_id'=> $request->skema_id
        ]);
        return redirect()->route('unikom.index')->with('success', 'Unit Kompetensi Berhasil Ditambahkan');
    }



    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $skema = Skema::all();
        $unikom = Unikom::findorfail($id);
        return view('admin/unikom/edit', compact('unikom', 'skema'));
    }



    public function update(Request $request, $id)
    {
        $unikom_data = [
            'kode' => $request->kode,
            'unikom' => $request->unikom,
            'skema_id' => $request->skema_id,
        ];
        Unikom::whereId($id)->update($unikom_data);
        return redirect()->route('unikom.index')->with('success','Unit Kompetensi Berhasil di Ubah');
    }



    public function destroy($id)
    {
        $unikom = Unikom::findorfail($id);
        $unikom->delete();
        return redirect()->back()->with('success','Unit Kompetensi Berhasil Dihapus');
    }
}
