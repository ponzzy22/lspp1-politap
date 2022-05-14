<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $file = File::all();
        return view('admin/file/index', compact('file'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = File::create([
            'file' =>$request->file,
            'image' => 'public/uploads/file/'.$new_image,
        ]);
        $image->move('public/uploads/file/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function show($id)
    {
        $file = File::findorfail($id);
        return view('admin/file/show', compact('file'));
    }


    public function destroy($id)
    {
        $file = File::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }
}
