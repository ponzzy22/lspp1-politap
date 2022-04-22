<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function index()
    {
        $info = Info::all();
        return view('admin/info/index', compact('info'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $strorg = Info::create([
            'keterangan' =>$request->keterangan,
            'image' => 'public/uploads/info/'.$new_image,
        ]);
        $image->move('public/uploads/info/', $new_image);
        return redirect()->route('info.index')->with('success','Gambar anda berhasil di Posting');
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
        $info = Info::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/info/', $new_image);
            $info_data = [
                'keterangan' =>$request->keterangan,
                'image' => 'public/uploads/info/'.$new_image,
            ];
        }
        else{
            $info_data = [
                'keterangan' =>$request->keterangan,
            ];
        }
        Info::whereId($id)->update($info_data);
        return back()->with('success','Informasi berhasil di Update');
    }


    public function destroy($id)
    {
        //
    }
}
