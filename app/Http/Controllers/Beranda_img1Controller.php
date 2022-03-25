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
    
    
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1000'
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $beranda_img1 = Beranda_img1::create([
            'image' => 'public/uploads/'.$new_image,
        ]);

        $image->move('public/uploads/', $new_image);
        return redirect()->route('sett-beranda.index')->with('success','Artikel anda berhasil di Posting');
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
