<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    public function index(){
        $asesor = Asesor::all();
        return view('admin/asesor/index', compact('asesor'));
    }



    public function store(Request $request) {
        $request->validate([
            'nik' => ['required'],
            'nama' => ['required'],
            'alamat' => ['required'],
            'sex' => ['required'],
            'email' => ['required', 'unique:asesor,email'],
            'status' => ['required'],
            'image' => ['required', 'image']
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $asesor = Asesor::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'sex' => $request->sex,
            'email' => $request->email,
            'status' => $request->status,
            'image' => 'public/uploads/asesor/'.$new_image,
        ]);
        $image->move('public/uploads/asesor/', $new_image);
        return redirect()->route('asesor.index')->with('success','Asesor Berhasil Ditambah');
    }


    public function edit($id) {
        $asesor = Asesor::findorfail($id);
        return view('admin/asesor/edit', compact('asesor'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'nik' => ['required'],
            'nama' => ['required'],
            'alamat' => ['required'],
            // 'sex' => ['required'],
            // 'email' => ['required', 'unique:asesor,email'],
            'status' => ['required'],
        ]);
        $asesor = Asesor::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/asesor/', $new_image);
            $asesor_data = [
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'sex' => $request->sex,
                'email' => $request->email,
                'status' => $request->status,
                'image' => 'public/uploads/asesor/'.$new_image,
            ];
        }
        else{
            $asesor_data = [
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'sex' => $request->sex,
                'email' => $request->email,
                'status' => $request->status,
            ];
        }
        $asesor->update($asesor_data);
        return back()->with('success','Data Asesor anda berhasil di Update');
    }


    public function destroy($id){
        $asesor = Asesor::findorfail($id);
        $asesor->delete();
        return redirect()->back()->with('success','Asesor Berhasil Dihapus');
    }
}
