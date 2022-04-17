<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img2;
use Illuminate\Http\Request;

class Beranda_img2Controller extends Controller
{

    public function index()
    {
        $beranda_img2 = Beranda_img2::orderBy('created_at','desc')->get();
        return view('admin/beranda_img2/index', compact('beranda_img2'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);
        
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img2 = Beranda_img2::create([
            'keterangan' =>$request->keterangan,
            'image' => 'public/uploads/beranda_img2/'.$new_image,
        ]);
        $image->move('public/uploads/beranda_img2/', $new_image);
        return redirect()->route('beranda_img2.index')->with('success','Portofolio anda berhasil di Posting');
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
        return redirect()->route('beranda_img2.index')->with('success','Portofolio anda berhasil di Update');
    }


    public function destroy($id)
    {
        $beranda_img2 = Beranda_img2::findorfail($id);
        $beranda_img2->delete();
        return redirect()->back()->with('success','Portofolio Berhasil Dihapus');
    }
}
