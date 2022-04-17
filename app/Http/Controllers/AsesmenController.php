<?php

namespace App\Http\Controllers;

use App\Models\Asesmen;
use App\Models\Skema;
use App\Models\Unikom;
use Illuminate\Http\Request;

class AsesmenController extends Controller
{
    public function index() {
        $skema = Skema::all();
        $unikom = Unikom::all();
        $asesmen = Asesmen::all();
        return view('admin/asesmen/index', compact('unikom', 'skema', 'asesmen'));
    }


    public function store(Request $request) {
        $request->validate([
            'asesmen' => ['required'],
            'unikom_id' => ['required']
        ]);
        $asesmen = Asesmen::create([
            'asesmen' => $request->asesmen,
            'unikom_id' => $request->unikom_id
        ]);
        return redirect()->back()->with('success', 'Assesmen Mandiri Berhasil Ditambahkan');
    }


    public function destroy($id) {
        $asesmen = Asesmen::findorfail($id);
        $asesmen->delete();
        return redirect()->back()->with('success','Assesmen Mandiri Berhasil Dihapus');
    }
}
