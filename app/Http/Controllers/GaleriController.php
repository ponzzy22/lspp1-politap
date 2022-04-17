<?php

namespace App\Http\Controllers;

use App\Models\Galeri_foto;
use App\Models\Group_galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{

    public function index()
    {
        $galeri = Group_galeri::orderBy('created_at','desc')->get();
        return view('admin/galeri/list_galeri', compact('galeri'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $galeri = Group_galeri::create([
            'galeri' => $request->galeri
        ]);
        return back()->with('success', 'Galeri Berhasil dibuat');
    }


    public function show($id)
    {
        $galeri = Group_galeri::findorfail($id);
        return view('admin/galeri/show', compact('galeri'));
    }


    public function edit($id)
    {
        $galeri = Group_galeri::findorfail($id);
        return view('admin/galeri/edit', compact('galeri'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $galeri_data = [
            'galeri' => $request->galeri
        ];
        Group_galeri::whereId($id)->update($galeri_data);
        return back()->with('success', 'Galeri Berhasil diubah');
    }


    public function destroy($id)
    {
        $galeri = Group_galeri::findorfail($id);
        $galeri->delete();
        return back()->with('success', 'Galeri Berhasil dihapus');
    }


    public function destroy3($id)
    {
        $foto = Galeri_foto::findorfail($id);
        $foto->delete();
        return back()->with('success', 'Galeri Berhasil dihapus');
    }


    public function foto_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => ['required']
        ]);
        if ($request->hasFile('image')) {
            $images = $request->image;
            foreach ($images as $image) {
                $new_image = time() . $image->getClientOriginalName();
                $image->move('public/uploads/data_register_apl2/', $new_image);
                $galeri = Galeri_foto::create([
                    'group_galeri_id' => $request->group_galeri_id,
                    'image' => 'public/uploads/data_register_apl2/' . $new_image,
                ]);
            }
        } else {
            $galeri = Galeri_foto::create([
                'group_galeri_id' => $request->group_galeri_id,
            ]);
        }
        return back()->with('success', 'Gambar berhasil diupload');
    }
}
