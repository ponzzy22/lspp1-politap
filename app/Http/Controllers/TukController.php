<?php

namespace App\Http\Controllers;

use App\Models\Tuk;
use Illuminate\Http\Request;

class TukController extends Controller
{

    public function index() {
        $tuk = Tuk::orderBy('created_at','desc')->get();
        return view('admin/tuk/index', compact('tuk'));
    }


    public function store(Request $request){
        $request->validate([
            'tuk' => ['required'],
            'alamat' => ['required']
        ]);
        $tuk = Tuk::create([
            'tuk' => $request->tuk,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('tuk.index')->with('success', 'TUK Berhasil Ditambahkan');
    }


    public function destroy($id)
    {
        $tuk = Tuk::findorfail($id);
        $tuk->delete();
        return redirect()->back()->with('success','TUK Berhasil Dihapus');
    }
}
