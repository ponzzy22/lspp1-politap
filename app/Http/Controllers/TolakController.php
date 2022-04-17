<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use Illuminate\Http\Request;

class TolakController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        // dd($request->all());
        // $request->validate([
        //     'id' => ['required', 'unique:data_registers,id']
        // ]);
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);

        return back();
    }


    public function destroy($id)
    {
        //
    }
}
