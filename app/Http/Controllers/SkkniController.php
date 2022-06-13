<?php

namespace App\Http\Controllers;

use App\Models\Skkni;
use Illuminate\Http\Request;

class SkkniController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Skkni::create([
            'file' =>$request->file,
            'image' => 'public/uploads/skkni/'.$new_image,
        ]);
        $image->move('public/uploads/skkni/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function destroy($id)
    {
        $file = Skkni::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }


    public function skkni_detail($id)
    {
        $file = Skkni::findorfail($id);
        return view('admin/file/show', compact('file'));
    }
}
