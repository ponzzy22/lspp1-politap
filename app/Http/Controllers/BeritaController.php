<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        $berita = Berita::orderBy('created_at','desc')->get();
        return view('admin/berita/index', compact('berita', 'kategori'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'kategori_id' => ['required'],
            'body' => ['required'],
            'image' => ['required']
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $berita = Berita::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'kategori_id' => $request->kategori_id,
            'body' => $request->body,
            'image' => 'public/uploads/berita/' . $new_image,
        ]);
        $image->move('public/uploads/berita/', $new_image);
        return back()->with('success', 'Artikel Berita Anda  berhasil di Posting');
    }


    public function show($id)
    {
        $kategori = Kategori::all();
        $berita = Berita::findorfail($id);
        return view('admin/berita/show', compact('berita', 'kategori'));
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
                'kategori_id' => $request->kategori_id,
                'body' => $request->body,
                'image' => 'public/uploads/berita/' . $new_image,
            ];
        } else {
            $berita_data = [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'kategori_id' => $request->kategori_id,
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
