<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Skema;
use Illuminate\Http\Request;

class SkemaController extends Controller
{

    public function index()
    {
        $prodi = Prodi::all();
        $skema = Skema::all();
        return view('admin/skema/index', compact('skema', 'prodi'));
    }



    public function store(Request $request)
    {
        $skema = Skema::create([
            'kode' =>$request->kode,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
        ]);
        return redirect()->route('skema.index')->with('success','Skema anda berhasil di Posting');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $prodi = Prodi::all();
        $skema = Skema::findorfail($id);
        return view('admin/skema/edit', compact('skema', 'prodi'));
    }


    public function update(Request $request, $id)
    {
        $skema_data = [
            'kode' =>$request->kode,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
        ];
        Skema::whereId($id)->update($skema_data);
        return redirect()->route('skema.index')->with('success','Skema Anda Berhasil di Ubah');
    }


    public function destroy($id)
    {
        $skema = Skema::findorfail($id);
        $skema->delete();
        return redirect()->back()->with('success','Skema Berhasil Dihapus');
    }
}
