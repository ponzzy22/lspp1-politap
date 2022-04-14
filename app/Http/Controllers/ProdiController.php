<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index() {
        $prodi = Prodi::all();
        return view('admin/prodi/index', compact('prodi'));
    }


    public function store(Request $request) {
        $prodi = Prodi::create([
            'prodi' => $request->prodi
        ]);
        return back()->with('success', 'Prodi Anda Sudah di Posting');
    }


    public function destroy($id){
        $prodi = Prodi::findorfail($id);
        $prodi->delete();
        return redirect()->back()->with('success','Prodi Berhasil Dihapus');
    }
}
