<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Status;
use App\Models\Tuk;
use Illuminate\Http\Request;

class SkemaController extends Controller
{

    public function index() {
        $status = Status::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        $prodi = Prodi::all();
        $skema = Skema::all();
        return view('admin/skema/index', compact('skema', 'prodi', 'asesor', 'tuk',  'status'));
    }


    public function create() {
        //
    }


    public function store(Request $request) {
        $skema = Skema::create([
            'kode_skema' =>$request->kode_skema,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
            'asesor_id' =>$request->asesor_id,
            'tuk_id' =>$request->tuk_id,
            'status_id' =>$request->status_id,

        ]);
        return redirect()->route('skema.index')->with('success','Skema anda berhasil di Posting');
    }


    public function show($id) {
        $skema = Skema::findorfail($id);
        return view('admin/skema/show')->with('skema', $skema);
    }


    public function edit($id) {
        $status = Status::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        $prodi = Prodi::all();
        $skema = Skema::findorfail($id);
        return view('admin/skema/edit', compact('skema', 'prodi', 'asesor', 'tuk', 'status'));
    }


    public function update(Request $request, $id) {
        $skema_data = [
            'kode_skema' =>$request->kode_skema,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
            'asesor_id' =>$request->asesor_id,
            'tuk_id' =>$request->tuk_id,
            'status_id' =>$request->status_id,
        ];
        Skema::whereId($id)->update($skema_data);
        return redirect()->route('skema.index')->with('success','Skema Anda Berhasil di Ubah');
    }


    public function destroy($id){
        $skema = Skema::findorfail($id);
        $skema->delete();
        return redirect()->back()->with('success','Skema Berhasil Dihapus');
    }
}
