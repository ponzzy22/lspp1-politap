<?php

namespace App\Http\Controllers;

use App\Models\F_profil;
use Illuminate\Http\Request;

class F_profilController extends Controller
{


    public function index()
    {
        $profil = F_profil::all();
        return view('admin/f_profil/index', compact('profil'));
    }


    public function store(Request $request)
    {
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $profil = F_profil::create([
            'profil' =>$request->profil,
            'visi' =>$request->visi,
            'misi' =>$request->misi,
            'motto' =>$request->motto,
            'image' => 'public/uploads/f_profil/'.$new_image,
        ]);
        $image->move('public/uploads/f_profil/', $new_image);
        return redirect()->route('f_profil.index')->with('success','Portofolio anda berhasil di Posting');
    }



    public function edit($id)
    {
        $profil = F_profil::findorfail($id);
        return view('admin/f_profil/edit', compact('profil'));
    }



    public function update(Request $request, $id)
    {
        $profil = F_profil::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/f_profil/', $new_image);
            $profil_data = [
                'profil' =>$request->profil,
                'visi' =>$request->visi,
                'misi' =>$request->misi,
                'motto' =>$request->motto,
                'image' => 'public/uploads/f_profil/'.$new_image,
            ];
        }
        else{
            $profil_data = [
                'profil' =>$request->profil,
                'visi' =>$request->visi,
                'misi' =>$request->misi,
                'motto' =>$request->motto,
            ];
        }
        $profil->update($profil_data);
        return redirect()->route('f_profil.index')->with('success','Data Profil Web anda berhasil di Update');
    }
}
