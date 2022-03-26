<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img1;
use Illuminate\Http\Request;

class Beranda_img1Controller extends Controller
{

    public function index()
    {
        $beranda_img1 = Beranda_img1::all();
        return view('admin/beranda_img1/index', compact('beranda_img1'));
    }

    

    public function create()
    {
        //
    }

    

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'keterangan' => 'required',
        //     'image' => 'required|image|max:1000'
        // ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Beranda_img1::create([
            'keterangan' =>$request->keterangan,
            'image' => 'public/uploads/beranda_img1/'.$new_image,
        ]);

        $image->move('public/uploads/beranda_img1/', $new_image);
        return redirect()->route('beranda_img1.index')->with('success','Carousel anda berhasil di Posting');
    }


    
    public function show($id)
    {
        $beranda_img1 = Beranda_img1::findorfail();
        return view('admin/beranda_img1/edit', compact('beranda_img1'));
    }

    
    public function edit($id)
    {
        //
    }

    

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'judul' => 'required',
        //     'category_id' => 'required',
        //     'content' => 'required'
        // ]);

        $beranda_img1 = Beranda_img1::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/beranda_img1/', $new_image);

            $beranda_img1_data = [
                'keterangan' =>$request->keterangan,
                'image' => 'public/uploads/beranda_img1/'.$new_image,
            ];
        }
        else{
            $beranda_img1_data = [
                'keterangan' =>$request->keterangan,
            ];
        }

        $beranda_img1->update($beranda_img1_data);
        return redirect()->route('beranda_img1.index')->with('success','Carousel anda berhasil di Update');
    }


    
    public function destroy($id)
    {
        $beranda_img1 = Beranda_img1::findorfail($id);
        $beranda_img1->delete();
        return redirect()->back()->with('success','Carousel Berhasil Dihapus');
    }
    
}