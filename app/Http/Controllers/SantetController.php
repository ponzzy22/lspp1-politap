<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Status;
use App\Models\Tuk;
use App\Models\Unikom;
use Illuminate\Http\Request;

class SantetController extends Controller
{
    public function index()
    {
        $status = Status::all();
        $unikom = Unikom::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        $prodi = Prodi::all();
        $skema = Skema::all();
        return view('admin/skema/index', compact('skema', 'prodi', 'asesor', 'tuk', 'unikom', 'status'));
    }


    public function edit($id)
    {
        $status = Status::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        $prodi = Prodi::all();
        $skema = Skema::findorfail($id);
        return view('admin/skema/edit', compact('skema', 'prodi', 'asesor', 'tuk', 'status'));
    }


    public function destroy($id)
    {
        $skema = Skema::findorfail($id);
        $skema->delete();
        return redirect()->back()->with('success','Skema Berhasil Dihapus');
    }


    public function store(Request $request)
    {
        $skema = Skema::create([
            'kode' =>$request->kode,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
            'asesor_id' =>$request->asesor_id,
            'tuk_id' =>$request->tuk_id,
            'status_id' =>$request->status_id,

        ]);
        return redirect()->route('skema')->with('success','Skema anda berhasil di Posting');
    }


    public function update(Request $request, $id)
    {
        $skema_data = [
            'kode' =>$request->kode,
            'skema' =>$request->skema,
            'prodi_id' =>$request->prodi_id,
            'asesor_id' =>$request->asesor_id,
            'tuk_id' =>$request->tuk_id,
            'status_id' =>$request->status_id,
        ];
        Skema::whereId($id)->update($skema_data);
        return redirect()->route('skema')->with('success','Skema Anda Berhasil di Ubah');
    }


    public function skemas
    (Skema $skema, Prodi $prodi, Asesor $asesor, Tuk $tuk, Status $status)
    {
        return view('admin/skema/skema1', [
            'kode' => $skema->kode,
            'unikoms'=> $skema->unikoms,
            'skema' => $skema->skema,
            'prodi' => $skema->prodi->prodi,
            'asesor' => $skema->asesor->nama,
            'tuk' => $skema->tuk->tuk,
            'status' => $skema->status->status,
            'count' => $skema->unikoms()->count()
        ]);
    }


    public function kluster()
    {
        $unikom = Unikom::all();
        $skema = Skema::all();
        return view('admin/skema/kluster', compact('skema', 'unikom'));
    }

    
    public function show_kluster($id)
    {
        $unikom = Unikom::findorfail($id);
        $skema = Skema::findorfail($id);
        return view('admin/skema/show_kluster', compact('skema', 'unikom'));
    }
}

