<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index()
    {
        $berita = Berita::orderBy('created_at','desc')->get();
        return view('admin/berita/index', compact('berita'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'image' => ['required']
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $berita = Berita::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image' => 'public/uploads/berita/' . $new_image,
        ]);
        $image->move('public/uploads/berita/', $new_image);
        return back()->with('success', 'Artikel Berita Anda  berhasil di Posting');
    }


    public function show($id)
    {
        $berita = Berita::findorfail($id);
        return view('admin/berita/show', compact('berita'));
    }


    public function edit($id)
    {
        $berita = Berita::findorfail($id);
        return view('admin/berita/edit', compact('berita'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time() . $image->getClientOriginalName();
            $berita_data = [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'image' => 'public/uploads/berita/' . $new_image,
            ];
        } else {
            $berita_data = [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body
            ];
        }

        Berita::whereId($id)->update($berita_data);
        return back()->with('success', 'Artikel Berita Anda  berhasil di Update');
    }


    public function destroy($id)
    {
        $berita = Berita::findorfail($id);
        $berita->delete();
        return back()->with('success', 'Artikel Berita Anda  berhasil di Hapus');
    }
}
