<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Status;
use App\Models\Tuk;
use App\Models\Unikom;
use Illuminate\Http\Request;

class SkemaController extends Controller
{

    public function index(){
        $status = Status::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        $prodi = Prodi::all();
        $skema = Skema::all();
        return view('admin/skema/index', compact('skema', 'prodi', 'asesor', 'tuk',  'status'));
    }


    public function store(Request $request){
        $request->validate([
            'kode_skema' => ['required', 'unique:skemas,kode_skema'],
            'skema' => ['required'],
            'prodi_id' => ['required'],
            'asesor_id' => ['required'],
            'tuk_id' => ['required'],
            'status_id' => ['required']
        ]);
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
        $request->validate([
            'kode_skema' => ['required', 'unique:skemas,kode_skema'],
            'skema' => ['required'],
            'prodi_id' => ['required'],
            'asesor_id' => ['required'],
            'tuk_id' => ['required'],
            'status_id' => ['required']
        ]);
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


    public function show_asesmen($id){
        $unikom = Unikom::findorfail($id);
        return view('admin/skema/show_asesmen')->with('unikom', $unikom);
    }


    public function detail($id){
        $skema = Skema::findorfail($id);
        return view('admin/skema/detail', compact('skema'));
    }
}
