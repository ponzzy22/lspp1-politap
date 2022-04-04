<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AsesiController extends Controller
{


    public function index()
    {
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $asesi = Asesi::all();
        return view('asesi/index', compact('asesi', 'semester', 'jurusan'));
    }



    public function edit()
    {
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/edit', compact('semester', 'jurusan','sex', 'user'));
    }


    public function update(Request $request)
    {

        $request->validate([
            'name' => ['min:3', 'max:100', 'required', 'unique:users,name,'. auth()->id()],
            'email' => ['min:3','alpha_num', 'numeric', 'required', 'unique:users,email,'. auth()->id()],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['min:3', 'max:100', 'required'],
            'tmpt_lahir' => ['min:3', 'max:100', 'required'],
            'negara' => ['min:3', 'max:100', 'required'],
            'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            'kode_post' => ['min:3', 'max:10000000', 'numeric', 'required'],
            // 'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            'surel' => ['email','min:3', 'max:100', 'required', 'unique:users,surel,'.auth()->id()],
            // 'image' => ['required'],
            // 'ktm' => ['required'],
        ]);

        if ($request->has('image')) 
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/beranda_img2/', $new_image);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'image' => 'public/uploads/beranda_img2/'.$new_image,
            ]);
        }

        if ($request->has('ktm')) 
        {
            $ktm = $request->ktm;
            $new_ktm = time().$ktm->getClientOriginalName();
            $ktm->move('public/uploads/beranda_img2/', $new_ktm);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'ktm' => 'public/uploads/beranda_img2/'.$new_ktm,
            ]);
        }

        if ($request->has('khs')) 
        {
            $khs = $request->khs;
            $new_khs = time().$khs->getClientOriginalName();
            $khs->move('public/uploads/beranda_img2/', $new_khs);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'khs' => 'public/uploads/beranda_img2/'.$new_khs,
            ]);
        }

        if ($request->has('ktp')) 
        {
            $ktp = $request->ktp;
            $new_ktp = time().$ktp->getClientOriginalName();
            $ktp->move('public/uploads/beranda_img2/', $new_ktp);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'ktp' => 'public/uploads/beranda_img2/'.$new_ktp,
            ]);
        }

        else{
            auth()->user()->update([
                'name' => $request->name,
            'email' => $request->email,
            'sex_id' => $request->sex_id,
            'tgl_lahir' => $request->tgl_lahir,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
            'tmpt_lahir' => $request->tmpt_lahir,
            'no_hp' => $request->no_hp,
            'kode_post' => $request->kode_post,
            'surel' => $request->surel,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            ]);
        }

        return back()->with('success', ' Data Profil Anda Berhasil di Update');
    }


    public function show($id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}