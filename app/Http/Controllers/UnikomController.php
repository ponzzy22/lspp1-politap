<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Unikom;
use Illuminate\Http\Request;

class UnikomController extends Controller
{
    public function index()  {
        $skema = Skema::all();
        $unikom = Unikom::all();
        return view('admin/unikom/index', compact('unikom', 'skema'));
    }


    public function store(Request $request) {
        $request->validate([
            'kode_unikom' => ['required', 'unique:unikoms,kode_unikom'],
            'unikom' => ['required'],
            'skema_id' => ['required']
        ]);
        $unikom = Unikom::create([
            'kode_unikom' => $request->kode_unikom,
            'unikom' => $request->unikom,
            'skema_id'=> $request->skema_id
        ]);
        return redirect()->back()->with('success', 'Unit Kompetensi Berhasil Ditambahkan');
    }


    public function edit($id) {
        $skema = Skema::all();
        $unikom = Unikom::findorfail($id);
        return view('admin/unikom/edit', compact('unikom', 'skema'));
    }


    public function update(Request $request, $id) {
        $unikom_data = [
            'kode_unikom' => $request->kode_unikom,
            'unikom' => $request->unikom,
            'skema_id' => $request->skema_id,
        ];
        Unikom::whereId($id)->update($unikom_data);
        return redirect()->route('unikom.index')->with('success','Unit Kompetensi Berhasil di Ubah');
    }


    public function destroy($id) {
        $unikom = Unikom::findorfail($id);
        $unikom->delete();
        return redirect()->back()->with('success','Unit Kompetensi Berhasil Dihapus');
    }
}
