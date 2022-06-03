<?php

namespace App\Http\Controllers;

use App\Models\Tuk;
use Illuminate\Http\Request;

class TukController extends Controller
{

    public function index() {
        $tuk = Tuk::where('id', '>', 1)->get();
        return view('admin/tuk/index', compact('tuk'));
    }


    public function show($id) {
        $tuk = Tuk::findorfail($id);
        return view('admin/tuk/show', compact('tuk'));
    }


    public function store(Request $request){
        $request->validate([
            'tuk' => ['required'],
            'alamat' => ['required']
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $tuk = Tuk::create([
            'tuk' => $request->tuk,
            'pengelola' => $request->pengelola,
            'alamat' => $request->alamat,
            'image' => 'public/uploads/pengelola/'.$new_image,
        ]);
        $image->move('public/uploads/pengelola/', $new_image);
        return redirect()->route('tuk.index')->with('success', 'TUK Berhasil Ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $tuk = Tuk::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/pengelola/', $new_image);
            $tuk_data = [
                'tuk' => $request->tuk,
                'pengelola' => $request->pengelola,
                'alamat' => $request->alamat,
                'image' => 'public/uploads/pengelola/'.$new_image,
            ];
        }
        else{
            $tuk_data = [
                'tuk' => $request->tuk,
                'pengelola' => $request->pengelola,
                'alamat' => $request->alamat,
            ];
        }
        $tuk->update($tuk_data);
        return redirect()->back()->with('success','Data TUK Web anda berhasil di Update');
    }


    public function destroy($id)
    {
        $tuk = Tuk::findorfail($id);
        $tuk->delete();
        return redirect()->back()->with('success','TUK Berhasil Dihapus');
    }
}
