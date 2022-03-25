<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img2;
use Illuminate\Http\Request;

class Beranda_img2Controller extends Controller
{

    public function index()
    {
        $beranda_img2 = Beranda_img2::all();
        return view('admin/beranda_img2/index', compact('beranda_img2'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $beranda_img2 = Beranda_img2::create([
            'keterangan' =>$request->keterangan,
            'image' => 'public/uploads/beranda_img2/'.$new_image,
        ]);

        $image->move('public/uploads/beranda_img2/', $new_image);
        return redirect()->route('beranda_img2.index')->with('success','Artikel anda berhasil di Posting');
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
        $beranda_img2 = Beranda_img2::findorfail($id);

        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/beranda_img2/', $new_image);

            $beranda_img2_data = [
                'keterangan' =>$request->keterangan,
                'image' => 'public/uploads/beranda_img2/'.$new_image,
            ];
        }

        else{
            $beranda_img2_data = [
                'keterangan' =>$request->keterangan,
            ];
        }

        $beranda_img2->update($beranda_img2_data);
        return redirect()->route('beranda_img2.index')->with('success','Artikel anda berhasil di Update');
    }


    public function destroy($id)
    {
        $beranda_img2 = Beranda_img2::findorfail($id);
        $beranda_img2->delete();

        return redirect()->back()->with('success','Kategori Berhasil Dihapus (Cek Tempat Sampah)');
    }
}
