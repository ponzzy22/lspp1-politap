<?php

namespace App\Http\Controllers;

use App\Models\Asesman;
use App\Models\Skema;
use Illuminate\Http\Request;

class AsesmanController extends Controller
{

    public function index()
    {
        $asesman = Asesman::all();
        $skema = Skema::all();
        return view('admin/asesman/index', compact('skema', 'asesman'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'skema_id' => ['required']
        ]);

        $asesman = Asesman::create([
            'nama' => $request->nama,
            'skema_id' => $request->skema_id
        ]);
        return redirect()->route('asesman.index')->with('success', 'Assesmen Mandiri Berhasil Ditambahkan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
