<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Jurusan;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AsesiController extends Controller
{


    public function index()
    {
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $asesi = Asesi::all();
        return view('asesi/index', compact('asesi', 'semester', 'jurusan'));
    }



    public function edit()
    {
        return view('asesi/edit');
    }


    public function update(Request $request)
    {
        $request->validate([
            'kode' => ['min:3', 'alpha_num', 'max:10', 'required'],
            'name' => ['min:3', 'max:10', 'required', 'unique:users'],
            'email' => ['min:3', 'max:10', 'required'],
            // 'password' => ['min:3', 'max:10', 'password']           
        ]);

        auth()->user()->update([
            'kode' => $request->kode,
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => 
        ]);
        return back()->with('success', 'Berhasil Update Kode');
    }


    public function show($id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
