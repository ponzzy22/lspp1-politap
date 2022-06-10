<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Info2;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function index()
    {
        $info = Info::all();
        $info2 = Info2::all();
        return view('admin/info/index', compact('info', 'info2'));
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
        return redirect()->route('info.index')->with('success','Video anda berhasil di Posting');
    }


    public function save_image(Request $request, $id)
    {
        // dd($request->all());
        $info = Info2::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/info/', $new_image);
            $info_data = [
                'image' => 'public/uploads/info/'.$new_image,
            ];
        }

        Info2::whereId($id)->update($info_data);
        return back()->with('success','Informasi berhasil di Update');
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
